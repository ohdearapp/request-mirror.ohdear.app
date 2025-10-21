<?php

it('returns a valid sitemap XML document', function () {
    $response = $this->get('/sitemap.xml');

    $response->assertOk()
        ->assertHeader('Content-Type', 'application/xml');

    expect($response->content())
        ->toContain('<?xml version="1.0" encoding="UTF-8"?>');

    $xml = simplexml_load_string($response->content());

    expect($xml)->not->toBeFalse()
        ->and($xml->getName())->toBe('urlset');

    expect($xml->url)->not->toBeEmpty();

    $firstUrl = $xml->url[0];
    expect($firstUrl->loc)->not->toBeEmpty()
        ->and((string) $firstUrl->priority)->not->toBeEmpty()
        ->and((string) $firstUrl->changefreq)->not->toBeEmpty();
});
