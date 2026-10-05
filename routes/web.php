<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/portfolio');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});