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
use App\Http\Controllers\GzipController;

Route::any('/anything', [AnythingController::class, 'anything']);
Route::any('/anything/{path}', [AnythingController::class, 'anythingWithPath'])->where('path', '.*');

Route::get('/get', GetController::class);
Route::post('/post', PostController::class);
Route::put('/put', PutController::class);
Route::patch('/patch', PatchController::class);
Route::delete('/delete', DeleteController::class);

Route::get('/headers', HeadersController::class);
Route::get('/ip', IpController::class);
Route::get('/user-agent', UserAgentController::class);
Route::get('/gzip', GzipController::class);

Route::any('/status/{codes}', StatusController::class);