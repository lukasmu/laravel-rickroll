<?php

it('redirects properly', function () {
    $response = $this->get('wp-admin');
    $response->assertStatus(302);
    $response->assertRedirect('https://www.youtube.com/watch?v=dQw4w9WgXcQ');

    $response = $this->get('nevergonnagiveyouup');
    $response->assertStatus(404);
});

it('redirects to an existing website', function () {
    $headers = get_headers('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
    $this->assertTrue($headers && strpos($headers[0], '200'));
});

it('can publish', function () {
    $this->assertFileDoesNotExist(config_path('rickroll.php'));
    $this->artisan('vendor:publish', [
        '--provider' => 'LukasMu\Rickroll\RickrollServiceProvider',
    ]);
    $this->assertFileExists(config_path('rickroll.php'));
    $this->assertFileIsReadable(config_path('rickroll.php'));
    $this->assertFileEquals(config_path('rickroll.php'), __DIR__.'/../../config/rickroll.php');
});
