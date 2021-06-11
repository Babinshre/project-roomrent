<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
public function send(Request $request)
{
    $data = [
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'message' => $request->message,
    ];
    Mail::to('babinshrestha5748@gmail.com')->send(new SendEmail($data));
    return redirect()->back();
}
}
