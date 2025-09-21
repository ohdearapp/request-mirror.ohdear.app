<?php

namespace App\Http\Controllers;

use App\Traits\RequestMirrorTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AnythingController
{
    use RequestMirrorTrait;

    public function anything(Request $request): JsonResponse
    {
        return $this->buildResponse($request);
    }

    public function anythingWithPath(Request $request, string $path): JsonResponse
    {
        return $this->buildResponse($request, ['path' => $path]);
    }
}
