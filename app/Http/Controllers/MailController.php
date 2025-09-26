<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
  function sendEmail(Request $request){

  $to=$request->to;
  $subject=$request->subject;
  $msg=$request->message;
  


 Mail::to($to)->send(new WelcomeEmail($msg,$subject));

 
return 'mail has been sent';
}


}
