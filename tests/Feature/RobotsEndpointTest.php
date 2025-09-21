<?php

it('returns robots.txt content', function () {
    $response = $this->get('/robots.txt');

    $response->assertOk()
        ->assertHeader('Content-Type', 'text/plain; charset=UTF-8');

    expect($response->content())
        ->toContain('User-agent: *')
        ->toContain('Disallow: /admin/')
        ->toContain('Disallow: /private/')
        ->toContain('Allow: /public/')
        ->toContain('Sitemap:');
});