<?php

namespace App\Http\Controllers;

use Closure;
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

    /**
     * Single-hop redirect to an arbitrary URL with a configurable 3xx status
     * code. Defaults to 302. Lets callers test client behavior against
     * specific redirect status codes (301, 302, 303, 307, 308, ...).
     *
     * GET /redirect-to?url=https://example.com&status=301
     */
    public function to(Request $request): RedirectResponse
    {
        $request->validate([
            'url' => [
                'required',
                'url:http,https',
                function (string $attribute, mixed $value, Closure $fail) use ($request): void {
                    if (! is_string($value)) {
                        return;
                    }

                    $targetHost = parse_url($value, PHP_URL_HOST);
                    $targetPath = parse_url($value, PHP_URL_PATH);

                    $sameHost = is_string($targetHost) && strcasecmp($targetHost, $request->getHost()) === 0;
                    $loopsBack = is_string($targetPath) && rtrim($targetPath, '/') === '/redirect-to';

                    if ($sameHost && $loopsBack) {
                        $fail('The url must not loop back to /redirect-to on this server.');
                    }
                },
            ],
            'status' => ['sometimes', 'integer', 'min:300', 'max:399'],
        ]);

        return redirect($request->query('url'), (int) $request->query('status', 302))
            ->withHeaders(['X-Robots-Tag' => 'noindex, nofollow']);
    }
}
