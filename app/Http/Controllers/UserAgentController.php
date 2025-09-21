<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserAgentController
{
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json([
            'user-agent' => $request->header('User-Agent'),
        ]);
    }
}