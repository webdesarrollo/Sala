<?php

namespace salaBolivar\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index($request)
    {
        $sala = str_replace("-", ' ', $request);
        $sala = strtoupper($sala);
        return view('front.index',compact('sala'));
    }
}
