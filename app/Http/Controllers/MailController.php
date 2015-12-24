<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class MailController extends Controller
{
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendTest()
    {
      Mail::send('emails.test', ['name' => 'Martin'], function ($message) {
          $message->from(env('MAIL_TEST'), 'WEFC');
          $message->subject('Test email from WEFC');
          $message->to(env('MAIL_TEST'));
      });

      return redirect()->route('home');
    }
}
