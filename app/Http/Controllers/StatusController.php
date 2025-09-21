<?php

namespace App\Http\Controllers;

use App\Traits\RequestMirrorTrait;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class StatusController
{
    use RequestMirrorTrait;

    public function __invoke(Request $request, string $codes): JsonResponse
    {
        $statusCode = $this->parseStatusCode($codes);

        $response = $this->buildResponse($request, [
            'status' => $statusCode,
        ]);

        return $response->setStatusCode($statusCode);
    }

    private function parseStatusCode(string $codes): int
    {
        $codeList = array_filter(explode(',', $codes), function($code) {
            return is_numeric(trim($code)) && trim($code) >= 100 && trim($code) <= 599;
        });

        if (empty($codeList)) {
            return 200;
        }

        if (count($codeList) === 1) {
            return (int) trim($codeList[0]);
        }

        return (int) trim($codeList[array_rand($codeList)]);
    }
}