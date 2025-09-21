<?php

namespace App\Http\Controllers;

use App\Traits\RequestMirrorTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HeadersController
{
    use RequestMirrorTrait;

    public function __invoke(Request $request): JsonResponse
    {
        return response()->json([
            'headers' => $this->formatHeaders($request),
        ]);
    }
}
