<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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

        // Send Email
        try {
            Mail::raw(
                "Name: {$validated['name']}\nEmail: {$validated['email']}\n\nMessage:\n{$validated['message']}",
                function ($mail) use ($validated) {
                    $mail->to('info@pathfinder311.com')
                        ->replyTo($validated['email'], $validated['name'])
                        ->subject('New Contact Form Submission from ' . $validated['name']);
                }
            );
        } catch (\Exception $e) {
            Log::warning('Contact form email failed: ' . $e->getMessage());
        }

        // Split name into first and last
        $nameParts = explode(' ', $validated['name'], 2);
        $firstName = $nameParts[0];
        $lastName  = $nameParts[1] ?? '';

        // Send to GoHighLevel
        try {
            Http::withHeaders([
                'Authorization' => 'Bearer ' . env('GHL_ACCESS_TOKEN'),
                'Content-Type'  => 'application/json',
                'Version'       => '2021-07-28'
            ])->post(env('GHL_BASE_URL') . '/contacts/', [
                'locationId' => env('GHL_LOCATION_ID'),
                'firstName'  => $firstName,
                'lastName'   => $lastName,
                'email'      => $validated['email'],
                'tags'       => ['website-contact-form'],
                'customFields' => [
                    [
                        'key'   => 'message',
                        'value' => $validated['message'],
                    ]
                ]
            ]);
        } catch (\Exception $e) {
            Log::warning('GoHighLevel API call failed: ' . $e->getMessage());
        }

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you! Your message has been sent. We will get back to you shortly.');
    }
}
