<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusCodeRequest;
use App\Traits\RequestMirrorTrait;
use Illuminate\Http\JsonResponse;

class StatusController
{
    use RequestMirrorTrait;

    public function __invoke(StatusCodeRequest $request): JsonResponse
    {
        $statusCode = $request->getParsedStatusCode();

        $response = $this->buildResponse($request, [
            'status' => $statusCode,
        ]);

        return $response->setStatusCode($statusCode);
    }
}
