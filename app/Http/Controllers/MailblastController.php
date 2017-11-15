<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Input;
use App\Mailblast;

class MailblastController extends Controller
{

	public function index(){
		return view('emails.form');
	}

    public function sendMail(){
        $this->validate( request(), [
                'message' => 'required|max:100',
                'email' => 'required|max:30'
            ]);

        $body = Input::get('message');
    	$message = [
    		'title' => 'Sample message',
    		'body' => $body
    	];
        $data = [
                'to' => Input::get('email'),
                'message' => $body,
                'users_id' => 1
            ];
        try{
            Mail::send('emails.orders', $message, function($callback){
                $to = Input::get('email');
                $callback->to($to, 'Someone')->subject('sample message');
                });
            
            Mailblast::insert($data);
            return redirect('/sent');
        }catch(Exception $e){
            dd($e);
        }

    }

    public function sent(){
        return view('emails.success');
    }

    public function inbox(){
        $data = Mailblast::all();
        return view('emails.inbox', compact('data') );
    }

    public function read(Mailblast $mail){
        return view('emails.read', compact('mail') );
    }
}
