<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>Hello from the About Page.</h1>';
});

Route::get('/contact', function () {
    return view( 'contact' );
});
