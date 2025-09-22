<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusCodeRequest extends FormRequest
{
    public function getParsedStatusCode(): int
    {
        $codes = collect(explode(',', $this->route('codes')))
            ->map(fn ($code) => trim($code))
            ->filter(fn ($code) => is_numeric($code) && $code >= 100 && $code <= 599)
            ->map(fn ($code) => (int) $code)
            ->values();

        return $codes->isEmpty() ? 200 : $codes->random();
    }
}
