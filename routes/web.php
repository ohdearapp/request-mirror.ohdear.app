<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/form', [FormController::class, 'show'])->name('form.show');
Route::post('/form', [FormController::class, 'submit'])->name('form.submit');
