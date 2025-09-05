<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'first-name' => 'required|string|max:100',
            'last-name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'subject'    => 'required|string|max:255',
            'message'    => 'required|string',
        ]);

        $data = [
            'first_name' => $validated['first-name'],
            'last_name'  => $validated['last-name'],
            'email'      => $validated['email'],
            'subject'    => $validated['subject'],
            'message'    => $validated['message'],
        ];

        // يرسل البريد
        Mail::send('contact', $data, function($message) use ($data) {
            $message->to('amine.triki@live.com')
                    ->subject('New Contact: ' . $data['subject'])
                    ->replyTo($data['email']);
        });

        return back()->with('success', 'شكرا، تم إرسال رسالتك بنجاح ✅');
    }
}
