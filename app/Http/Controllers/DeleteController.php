<?php

namespace App\Http\Controllers;

use App\Traits\RequestMirrorTrait;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DeleteController
{
    use RequestMirrorTrait;

    public function __invoke(Request $request): JsonResponse
    {
        return $this->buildResponse($request);
    }
}