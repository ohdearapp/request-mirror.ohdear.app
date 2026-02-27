<?php

namespace App\Http\Controllers;

use App\Traits\RequestMirrorTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CrawlerTestController
{
    use RequestMirrorTrait;

    public function index(Request $request): View
    {
        return view('crawler-test', [
            'title' => 'Crawler Test Index',
            'currentPage' => 'index',
            'mirrorData' => $this->getMirrorData($request),
        ]);
    }

    public function page(Request $request, int $page): View
    {
        abort_unless(in_array($page, [1, 2, 3]), 404);

        return view('crawler-test', [
            'title' => "Crawler Test Page {$page}",
            'currentPage' => $page,
            'mirrorData' => $this->getMirrorData($request),
        ]);
    }

    protected function getMirrorData(Request $request): array
    {
        return [
            'url' => $request->fullUrl(),
            'args' => $request->query(),
            'headers' => $this->formatHeaders($request),
            'origin' => $request->ip(),
        ];
    }
}
