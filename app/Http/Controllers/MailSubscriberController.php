<?php

namespace App\Http\Controllers;

use App\Jobs\Sendemail;
use Illuminate\Http\Request;

class MailSubscriberController extends Controller
{
    public function __invoke(Request $request)
    {
   $mail = new \App\Mail\UserSubscribed($request->input('mail'));
   Sendemail::dispatch($mail)->onQueue('emails');
    }
}
