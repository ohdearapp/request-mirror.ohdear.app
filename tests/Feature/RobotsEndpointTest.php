<?php

it('returns robots.txt content', function () {
    $response = $this->get('/robots-txt');

    $response->assertOk()
        ->assertHeader('Content-Type', 'text/plain; charset=utf-8');

    expect($response->content())
        ->toContain('Sitemap');
});
