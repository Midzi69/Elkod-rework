<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use Illuminate\Support\Facades\Storage;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the form data
        $request->validate([
            'from_email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:40500', // Optional file upload with constraints
        ]);

        // Collect form data
        $emailData = [
            'fromEmail' => $request->input('from_email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Initialize the file path to null
        $filePath = null;

        // Check if a file was uploaded
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Validate and store the file
            if ($file->isValid()) {
                // Store the file in the 'attachments' folder under storage/app
                $filePath = $file->store('private/attachments');
                dd($filePath);
            } else {
                return back()->with('error', 'File upload failed.');
            }
        }

        // Send email using Mail facade
        Mail::send([], [], function ($message) use ($emailData, $filePath) {
            // Set the from and to email addresses
            $message->from($emailData['fromEmail'])
                    ->to('milos.tordai@elkod.rs') // Receiver's email
                    ->subject($emailData['subject'])
                    ->html($emailData['message']);  // Body content

            // Check if file path exists and attach the file
            if ($filePath) {
                $fullPath = storage_path('app/' . $filePath); // Get the full file path

                // Ensure the file exists before attaching it
                if (!file_exists($fullPath)) {
                    dd("File does not exist at path: " . $fullPath);  // Debug if file does not exist
                }

                // Attach the file to the email
                $message->attach($fullPath);
            }
        });

        // Redirect back to the home page with success message
        return redirect('/')->with('success', 'Message has been sent!');
    }
}
