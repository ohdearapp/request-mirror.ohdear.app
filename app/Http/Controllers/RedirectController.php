<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RedirectController
{
    /**
     * Redirect N times, decrementing each step. The chain terminates with
     * a 204 No Content response when the counter reaches zero.
     *
     * GET /redirect/number/{number}
     */
    public function number(Request $request, string $number): RedirectResponse|Response
    {
        $request->merge(['number' => $number]);

        $request->validate([
            'number' => ['required', 'integer', 'min:0', 'max:20'],
        ]);

        $count = (int) $number;

        if ($count === 0) {
            return response()->noContent();
        }

        return redirect(url('/redirect/number/'.($count - 1)), 302);
    }
}
