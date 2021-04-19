<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use App\Models\SaveRequest;
use Mail;

class SendEmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
        // $request->validate([
        //   'email' => 'required|email',
        //   'subject' => 'required',
        //   'name' => 'required',
        //   'message' => 'required',
        // ]);

        // $data = [
        //   'subject' => $request->subject,
        //   'name' => $request->name,
        //   'email' => $request->email,
        //   'message' => $request->message
        // ];

        // Mail::send('email-template', $data, function($message) use ($data) {
        //  // $message->to($data['email'])
        //  $message->to('naiman.team@gmail.com')
        //   ->subject($data['subject']);
          
        // });

        // return back()->with(['message' => 'Email successfully sent!']);
        $this -> validate($request,[
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'message' => 'required',
      ]);
     

      $data = array(
        'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'message' => $request->message
      );

      Mail::to('naiman.team@gmail.com')
          ->send(new DemoMail($data));

          $review = new SaveRequest();
          $review->name = $request->input('name');
          $review->email = $request->input('email');
          $review->subject = $request->input('subject');
          $review->message = $request->input('message');
  
          
  
          $review->save();
  
          return back();
    }
}