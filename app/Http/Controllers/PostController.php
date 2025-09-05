<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

        // عرض مقالة واحدة مع التعليقات المعتمَدة

   public function show(string $slug)
    {
        $post = Post::with([
                'category',
                'comments' => fn ($q) => $q->where('status', 'approved')->latest(),
                'comments.user',
            ])
            ->where('slug', $slug)
            ->firstOrFail();

        return view('post', compact('post'));
    }

    // تخزين تعليق (للمستخدمين فقط)
    public function storeComment(Request $request, int $id)
    {
        $request->validate([
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        Comment::create([
            'post_id' => $id,
            'user_id' => Auth::id(), // ملاحظة أدناه بخصوص Intelephense
            'subject' => $request->subject,
            'message' => $request->message,
            'status'  => 'pending',
        ]);

        return back()->with('success', 'Comment submitted and waiting for approval!');
    }
}
