<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DenyController
{
    public function __invoke(Request $request): JsonResponse
    {
        $request->merge([
            'ips' => array_map('trim', explode(',', $request->query('from', ''))),
        ]);

        $request->validate([
            'from' => ['required', 'string'],
            'ips' => ['required', 'array', 'max:10'],
            'ips.*' => ['required', 'ipv4'],
        ]);

        if (in_array($request->ip(), $request->input('ips'), true)) {
            return response()->json([
                'denied' => true,
                'origin' => $request->ip(),
                'message' => 'Your IP address is in the deny list.',
            ], 403);
        }

        return response()->json([
            'denied' => false,
            'origin' => $request->ip(),
            'message' => 'Your IP address is not in the deny list.',
        ]);
    }
}
