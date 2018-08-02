<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// to use the message model include it
use App\Message;

class MessagesController extends Controller
{
    //
    public function submit(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);
      // create new message using Eloquent
      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      // save message
      $message->save();
      /* redirect after entering into DB
         use with to display a flash message
         displays it in views > inc > messages
      */
      return redirect('/')->with('success', 'Message Sent');
    }
}
