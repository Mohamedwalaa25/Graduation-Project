<?php

namespace App\Http\Controllers\Api;

use App\Mail\ContactMail;
use App\Models\ContactEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SendMailRequest;
use Exception;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(SendMailRequest $request)
    {

        try {
            ContactEmail::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'content' => $request->content,
                'email' => $request->email
            ]);

            $emailData = [
                'name' => $request->name,
                'phone' => $request->phone,
                'content' => $request->content,
                'email' => $request->email

            ];

            Mail::to(env('MAIL_FROM_ADDRESS', 'hello@Myfarm.com'))->send(new ContactMail($emailData));

            return apiResponse([], "Mail Send SucessFully", 200);
        } catch (Exception $e) {

            return apiResponse([], $e->getMessage(), 403);
        }
    }
}
