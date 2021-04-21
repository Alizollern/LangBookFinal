<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\TechSupport;

class MailSend extends Controller
{
    public function mailView(){
		return view('MailSend');
	}
	public function mailSend(Request $request)
	{	
		$name = $request->name;
		$email = $request->email;
		$subject = $request->subject;
		$message = $request->message;
		Mail::to('190103414@stu.sdu.edu.kz')->send(new TechSupport($message));
		return view('main');
	}
}
