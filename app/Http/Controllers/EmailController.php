<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;


class EmailController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $tel = $request->tel;
        $content = $request->message;

        Mail::send('emails.send', ['title' => 'Contato via site', 'content' => $content, 'email' => $email, 'name' => $name, 'tel' => $tel], function($message) {
            $message->from('no-reply@smowee.com', 'Site Smowee');
            $message->to('contato@smowee.com');
            $message->subject('Formulário de contato');
        });

    // return response()->json(['message' => 'email enviado']);
       return redirect('/'); 
    }
}
