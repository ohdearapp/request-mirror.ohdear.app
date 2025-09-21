<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class GzipController
{
    public function __invoke(): Response
    {
        $data = [
            'message' => 'This is a gzipped response',
            'data' => 'Hello, World! This content is compressed with gzip.',
            'timestamp' => now()->toISOString(),
            'gzipped' => true,
        ];

        $jsonContent = json_encode($data, JSON_PRETTY_PRINT);
        $gzippedContent = gzencode($jsonContent);

        return response($gzippedContent, 200, [
            'Content-Type' => 'application/json',
            'Content-Encoding' => 'gzip',
            'Vary' => 'Accept-Encoding',
        ]);
    }
}
