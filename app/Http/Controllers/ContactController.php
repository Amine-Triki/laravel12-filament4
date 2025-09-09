<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
class ContactController extends Controller
{
   public function send(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'subject'    => 'required|string|max:255',
            'message'    => 'required|string',
        ]);

        $data = [
            'first_name' => $validated['first_name'],
            'last_name'  => $validated['last_name'],
            'email'      => $validated['email'],
            'subject'    => $validated['subject'],
            'message'    => $validated['message'],
        ];

        Mail::to('amine.triki@live.com')->send(new ContactMessage($data));

        return back()->with('success', 'شكراً، تم إرسال رسالتك بنجاح ✅');
    }
}
