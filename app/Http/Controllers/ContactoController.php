<?php

namespace salaBolivar\Http\Controllers;

use Illuminate\Http\Request;
use salaBolivar\Http\Requests\ContactoRequest;
use Mail;
use Session;
use Redirect;

class ContactoController extends Controller
{
    public function store(ContactoRequest $request){
            Mail::send('emails.contact',$request->all(),function($msj){
            $msj->subject('Correo de Salas Bolivar');
            $msj->to('salasdeensayobolivar@gmail.com');
        });
        
        Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('/#contacto');
    }
}
