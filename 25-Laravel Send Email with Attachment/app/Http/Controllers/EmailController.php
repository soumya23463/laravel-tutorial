<?php

namespace App\Http\Controllers;

use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        $to = "kesarwanisoumya3@gmail.com";
        $moreUser = "soumyakesarwani70@gmail.com";
        $mailMessage = "Hello, this is a test email.";
        $subject = "Test Email";
        $detail = [
            'name' => 'Soumya Kesarwani',
            'product' => 'Laravel 9',
            'price' => '1000',
        ];

        // Mail::to($to)->send(new welcomeemail($mailMessage, $subject));
        Mail::to($to)->cc($moreUser)->bcc($moreUser)->send(new welcomeemail($mailMessage, $subject, $detail));
        return response()->json(['message' => 'Email sent successfully!']);


        $emails = [
            'user@gmail.com',
            'user@1gmail.com',
            'user2@gmail.com'
        ];
        foreach ($emails as $email) {
            Mail::to($email)->send(new welcomeemail($mailMessage, $subject));
        }
    }

    public function contact()
    {

        return view('contact');
    }
    public function sendAttachment(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
            'attachment' => 'required|file|mimes:pdf,jpg,png|max:2048',
        ]);

        $attachment = $request->file('attachment');
        $fileName = time() . '_' . $attachment->getClientOriginalName();
        $attachment->move(public_path('upload'), $fileName);

        $adminEmail = "kesarwanisoumya3@gmail.com";

        $response = Mail::to($adminEmail)->send(new welcomeemail($request->all(), $fileName));
        if ($response) {
            return back()->with('success', 'Email sent successfully!');
        } else {
            return back()->with('error', 'Failed to send email.');
        }
    }
}