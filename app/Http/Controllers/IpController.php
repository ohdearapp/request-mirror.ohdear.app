<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IpController
{
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json([
            'origin' => $request->ip(),
        ]);
    }
}
