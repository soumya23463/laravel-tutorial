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
}
