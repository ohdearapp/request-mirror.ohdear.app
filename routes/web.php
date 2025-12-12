<?php

use App\Http\Controllers\FormController;
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

Route::get('/console', function () {
    $messages = collect(request()->query('messages', []))
        ->map(function ($message) {
            return [
                'type' => $message['type'] ?? 'log',
                'message' => $message['message'] ?? '',
            ];
        });

    return view('console', ['messages' => $messages]);
});

Route::get('/form', [FormController::class, 'show'])->name('form.show');
Route::post('/form', [FormController::class, 'submit'])->name('form.submit');

Route::view('/examples/product-info-page', 'examples.product-info-page')->name('examples.product-info-page');

Route::get('/sitemap.xml', function () {
    $baseUrl = config('app.url');

    // Define all public GET routes
    $urls = [
        ['loc' => $baseUrl, 'priority' => '1.0'],
        ['loc' => $baseUrl.'/html', 'priority' => '0.8'],
        ['loc' => $baseUrl.'/json', 'priority' => '0.8'],
        ['loc' => $baseUrl.'/robots-txt', 'priority' => '0.8'],
        ['loc' => $baseUrl.'/xml', 'priority' => '0.8'],
        ['loc' => $baseUrl.'/console', 'priority' => '0.8'],
        ['loc' => $baseUrl.'/form', 'priority' => '0.8'],
        ['loc' => $baseUrl.'/examples/product-info-page', 'priority' => '0.8'],
        ['loc' => $baseUrl.'/get', 'priority' => '0.7'],
        ['loc' => $baseUrl.'/headers', 'priority' => '0.7'],
        ['loc' => $baseUrl.'/ip', 'priority' => '0.7'],
        ['loc' => $baseUrl.'/user-agent', 'priority' => '0.7'],
        ['loc' => $baseUrl.'/gzip', 'priority' => '0.7'],
        ['loc' => $baseUrl.'/anything', 'priority' => '0.7'],
    ];

    return response()->view('sitemap', ['urls' => $urls], 200, [
        'Content-Type' => 'application/xml',
    ]);
})->name('sitemap');
