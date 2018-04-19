<?php

namespace salaBolivar\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index($request)
    {
        $sala = str_replace("-", ' ', $request);
        $sala = strtoupper($sala);
        switch($sala){
            case ($sala=='SALA A'):    
                return view('front.salaA',compact('sala'));
                break;
            case ($sala=='SALA B'):    
                return view('front.salaB',compact('sala'));
                break;    
            case ($sala=='SALA C'):    
                return view('front.salaC',compact('sala'));
                break;
            case ($sala=='SALA D'):    
                return view('front.salaD',compact('sala'));
                break;
            default:
                return view('/principal.index');
                break;
        }
        
    }
}
