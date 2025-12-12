<?php

it('returns HTML document', function () {
    $response = $this->get('/html');

    $response->assertOk()
        ->assertHeader('Content-Type', 'text/html; charset=utf-8');

    expect($response->content())
        ->toContain('<!DOCTYPE html>');

    // It should also include the HTTP request headers
    expect($response->content())
        ->toContain('user-agent')
        ->toContain('accept')
        ->toContain('accept-language');
});
