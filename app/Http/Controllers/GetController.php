<?php

namespace App\Http\Controllers;

use App\Traits\RequestMirrorTrait;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class GetController
{
    use RequestMirrorTrait;

    public function __invoke(Request $request): JsonResponse
    {
        return response()->json([
            'args' => $request->query(),
            'headers' => $this->formatHeaders($request),
            'origin' => $request->ip(),
            'url' => $request->fullUrl(),
        ]);
    }
}