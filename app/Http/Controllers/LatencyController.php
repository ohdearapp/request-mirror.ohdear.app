<?php

namespace App\Http\Controllers;

use App\Traits\RequestMirrorTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LatencyController
{
    use RequestMirrorTrait;

    /**
     * Add a fixed delay to the response.
     * GET /latency/{milliseconds}
     */
    public function fixed(Request $request, string $milliseconds): JsonResponse
    {
        $request->merge(['milliseconds' => $milliseconds]);

        $request->validate([
            'milliseconds' => ['required', 'integer', 'min:0', 'max:1000'],
        ]);

        $ms = (int) $milliseconds;
        usleep($ms * 1000);

        return $this->buildLatencyResponse($request, $ms);
    }

    /**
     * Add a random delay between min and max milliseconds.
     * GET /latency/between/{min}/and/{max}
     */
    public function between(Request $request, string $min, string $max): JsonResponse
    {
        $request->merge(['min' => $min, 'max' => $max]);

        $request->validate([
            'min' => ['required', 'integer', 'min:0', 'max:1000', 'lte:max'],
            'max' => ['required', 'integer', 'min:0', 'max:1000'],
        ]);

        $minMs = (int) $min;
        $maxMs = (int) $max;

        $delayMs = random_int($minMs, $maxMs);
        usleep($delayMs * 1000);

        return $this->buildLatencyResponse($request, $delayMs);
    }

    /**
     * Add a random delay between 0 and 1000 milliseconds.
     * GET /latency/random
     */
    public function random(Request $request): JsonResponse
    {
        $delayMs = random_int(0, 1000);
        usleep($delayMs * 1000);

        return $this->buildLatencyResponse($request, $delayMs);
    }

    private function buildLatencyResponse(Request $request, int $delayMs): JsonResponse
    {
        return response()->json([
            'delay_ms' => $delayMs,
            'headers' => $this->formatHeaders($request),
            'origin' => $request->ip(),
            'url' => $request->fullUrl(),
        ]);
    }
}
