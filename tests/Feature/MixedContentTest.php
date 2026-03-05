<?php

it('returns the mixed content page', function () {
    $response = $this->get('/examples/mixed-content');

    $response->assertOk();
    $response->assertSee('Mixed Content Example');
});

it('includes resources loaded over http', function () {
    $response = $this->get('/examples/mixed-content');

    $content = $response->content();

    // CSS loaded over http
    expect($content)->toMatch('/link.*href="http:\/\/[^"]+\.css"/');

    // Image loaded over http
    expect($content)->toMatch('/img.*src="http:\/\/[^"]+\.png"/');

    // JavaScript loaded over http
    expect($content)->toMatch('/script.*src="http:\/\/[^"]+\.js"/');
});

it('loads resources from the same host over http', function () {
    $response = $this->get('/examples/mixed-content');

    $host = request()->getHost();
    $content = $response->content();

    expect($content)
        ->toContain("http://{$host}/build/assets/")
        ->toContain("http://{$host}/img/");
});
