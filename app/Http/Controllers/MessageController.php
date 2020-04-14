<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;


use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //
    public function store(){

        // return $request->get('nombre');
    //    return request('email');
    request()->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'content' => 'required|min:3'
    ], [
        'nombre.required' => 'Necesito tu nombre',
    ]);

    Mail::to('vic_ortiz20@hotmail.es')->send(new  MessageReceived );
    return back()->with('status', 'Recibimos tu mensaje te responderemos en menos de 24 horas');
    }
}
