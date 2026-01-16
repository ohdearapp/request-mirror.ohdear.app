<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $username = 'ohdear';
        $password = 'best-monitoring-service-ever';

        if (! hash_equals($username, $request->getUser() ?? '') || ! hash_equals($password, $request->getPassword() ?? '')) {
            return response('Unauthorized', 401, [
                'WWW-Authenticate' => 'Basic realm="Protected Area"',
            ]);
        }

        return $next($request);
    }
}
