<?php

namespace LukasMu\Rickroll\Tests;

use LukasMu\Rickroll\RickrollServiceProvider;
use Orchestra\Testbench\TestCase;

class BasicTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [RickrollServiceProvider::class];
    }

    public function test_redirect()
    {
        $response = $this->get('wp-admin');
        $response->assertStatus(302);
        $response->assertRedirect('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
    }

    public function test_redirect_availability()
    {
        $headers = get_headers('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
        $this->assertTrue($headers && strpos($headers[0], '200'));
    }

    public function test_invalid_url()
    {
        $path = 'nevergonnagiveyouup';
        $response = $this->get($path);
        $response->assertStatus(404);
    }

    public function test_config_publishing()
    {
        $this->artisan('vendor:publish', [
            '--provider' => 'LukasMu\Rickroll\RickrollServiceProvider',
        ]);
        $this->assertFileExists(config_path('rickroll.php'));
        $this->assertFileIsReadable(config_path('rickroll.php'));
        $this->assertFileEquals(config_path('rickroll.php'), __DIR__.'/../config/rickroll.php');
        $this->assertTrue(unlink(config_path('rickroll.php')));
    }
}
