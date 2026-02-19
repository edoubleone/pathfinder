<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Mail::raw(
            "Name: {$validated['name']}\nEmail: {$validated['email']}\n\nMessage:\n{$validated['message']}",
            function ($mail) use ($validated) {
                $mail->to('info@pathfinder311.com')
                     ->replyTo($validated['email'], $validated['name'])
                     ->subject('New Contact Form Submission from ' . $validated['name']);
            }
        );

        return redirect()->route('contact')->with('success', 'Thank you! Your message has been sent. We will get back to you shortly.');
    }
}
