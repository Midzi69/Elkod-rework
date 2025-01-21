<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'from_email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
            'file' => 'nullable|file|max:51200',
        ]);

        $emailData = [
            'fromEmail' => $validated['from_email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ];

        $filePath = $request->file('file') ? $request->file('file')->store('attachments') : null;

        Mail::send([], [], function ($message) use ($emailData, $filePath) {
            $message->from('milos.tordai@elkod.rs')
                    ->to('milos.tordai@elkod.rs')
                    ->subject("{$emailData['subject']} - {$emailData['fromEmail']}")
                    ->html($emailData['message']);

            if ($filePath) {
                $message->attach(storage_path('app/private/' . $filePath));
            }
        });

        return back()->with('success', 'Message has been sent.');
    }
}
