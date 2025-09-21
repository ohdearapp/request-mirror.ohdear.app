<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserAgentController
{
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json([
            'user-agent' => $request->header('User-Agent'),
        ]);
    }
}
