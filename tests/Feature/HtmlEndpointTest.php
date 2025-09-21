<?php

it('returns HTML document', function () {
    $response = $this->get('/html');

    $response->assertOk()
        ->assertHeader('Content-Type', 'text/html; charset=UTF-8');

    expect($response->content())
        ->toContain('<!DOCTYPE html>');
});
