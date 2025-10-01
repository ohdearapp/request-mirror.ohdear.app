<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/html', function () {
    return view('html');
});

Route::get('/json', function () {
    return response(view('json'), 200, ['Content-Type' => 'application/json']);
});

Route::get('/robots-txt', function () {
    return response(view('robots'), 200, ['Content-Type' => 'text/plain']);
});

Route::get('/xml', function () {
    return response(view('xml'), 200, ['Content-Type' => 'application/xml']);
});
