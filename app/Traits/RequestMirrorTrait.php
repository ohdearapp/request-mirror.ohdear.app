<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

trait RequestMirrorTrait
{
    protected function buildResponse(Request $request, array $additional = []): JsonResponse
    {
        $json = $this->parseJsonData($request);

        $response = [
            'method' => $request->method(),
            'url' => $request->fullUrl(),
            'args' => $request->query(),
            'data' => $this->getDataContent($request),
            'headers' => $this->formatHeaders($request),
            'json' => $json,
            'form' => $request->isJson() ? [] : $request->except('_token'),
            'files' => [],
            'origin' => $request->ip(),
        ];

        return response()->json(array_merge($response, $additional));
    }

    protected function parseJsonData(Request $request): array
    {
        if ($request->isJson() && $request->getContent()) {
            $decoded = json_decode($request->getContent(), true);

            return $decoded ?: [];
        }

        return [];
    }

    protected function getDataContent(Request $request): string
    {
        // For JSON requests, return the raw JSON content
        if ($request->isJson()) {
            return $request->getContent();
        }

        // For form data, build URL-encoded string
        if ($request->isMethod('POST') || $request->isMethod('PUT') || $request->isMethod('PATCH')) {
            $data = $request->except('_token');
            if (! empty($data)) {
                return http_build_query($data);
            }
        }

        // For other requests or raw content, return the raw content
        return $request->getContent();
    }

    protected function formatHeaders(Request $request): array
    {
        $headers = collect($request->headers->all())->map(function ($values) {
            return is_array($values) ? implode(', ', $values) : $values;
        })->toArray();

        return $this->removeKeysFromArray($headers, $this->getCloudflareHeaders());
    }

    protected function removeKeysFromArray(array $array, array $keysToRemove): array
    {
        return collect($array)
            ->reject(function ($value, $key) use ($keysToRemove) {
                return in_array(strtolower($key), array_map('strtolower', $keysToRemove));
            })
            ->toArray();
    }

    protected function getCloudflareHeaders(): array
    {
        return [
            'cf-visitor',
            'cf-ipcountry',
            'cf-connecting-ip',
            'cdn-loop',
            'cf-ray',
            'x-forwarded-for',
            'x-forwarded-proto',
        ];
    }
}
