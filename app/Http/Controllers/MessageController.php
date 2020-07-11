<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request){
        $message = request()->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'subject'   => 'required',
            'message'   => 'required|min:3'
        ], [
            'name.required' => __('I need your name'), // Custom messages
        ]);

        Mail::to('alejandro.rivera0309@gmail.com')->queue(new MessageReceived($message));

        return 'Mensaje enviado';
    }
}
