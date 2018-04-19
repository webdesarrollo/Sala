<?php

namespace salaBolivar\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class ContactoController extends Controller
{
    public function store(Request $request){
            Mail::send('emails.contact',$request->all(),function($msj){
            $msj->subject('Correo de Salas Bolivar');
            $msj->to('salasdeensayobolivar@gmail.com');
        });
        Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('/#contacto');
    }
}
