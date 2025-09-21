<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PutController;
use App\Http\Controllers\PatchController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\AnythingController;
use App\Http\Controllers\HeadersController;
use App\Http\Controllers\IpController;
use App\Http\Controllers\UserAgentController;
use App\Http\Controllers\StatusController;

Route::view('/', 'home')->name('home');

Route::get('/html', function () {
    return view('html');
});

Route::get('/json', function () {
    return response(view('json'), 200, ['Content-Type' => 'application/json']);
});

Route::get('/robots.txt', function () {
    return response(view('robots'), 200, ['Content-Type' => 'text/plain']);
});

Route::get('/xml', function () {
    return response(view('xml'), 200, ['Content-Type' => 'application/xml']);
});
