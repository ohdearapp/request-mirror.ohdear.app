<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class IpController
{
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json([
            'origin' => $request->ip(),
        ]);
    }
}