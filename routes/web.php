<?php

Route::get('/', function () {
    return view('principal.index');
});

Route::get('/salas/{valor}', 'FrontController@index');
