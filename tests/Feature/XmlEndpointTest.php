<?php

it('returns XML document', function () {
    $response = $this->get('/xml');

    $response->assertOk()
        ->assertHeader('Content-Type', 'application/xml; charset=UTF-8');

    expect($response->content())
        ->toContain('<?xml version="1.0" encoding="UTF-8"?>')
        ->toContain('<document>')
        ->toContain('<message>This is a simple XML document</message>')
        ->toContain('<generated_by>request-mirror</generated_by>')
        ->toContain('<timestamp>')
        ->toContain('<data>')
        ->toContain('<example>true</example>')
        ->toContain('<version>1.0</version>')
        ->toContain('</document>');
});