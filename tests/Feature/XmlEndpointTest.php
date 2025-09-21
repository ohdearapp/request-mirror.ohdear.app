<?php

it('returns XML document', function () {
    $response = $this->get('/xml');

    $response->assertOk()
        ->assertHeader('Content-Type', 'application/xml');

    expect($response->content())
        ->toContain('<?xml version="1.0" encoding="UTF-8"?>');
});
