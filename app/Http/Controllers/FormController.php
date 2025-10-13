<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FormController
{
    public function show(): View
    {
        return view('form');
    }

    public function submit(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'terms' => ['required', 'accepted'],
        ]);

        return redirect()->route('form.show')->with('success', 'Thank you for your submission!');
    }
}
