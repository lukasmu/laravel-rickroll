<?php

namespace LukasMu\Rickroll\Tests;

use LukasMu\Rickroll\RickrollServiceProvider;
use Orchestra\Testbench\TestCase;

class ExtendedTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [RickrollServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('rickroll.redirect_url', 'https://example.org');
        $app['config']->set('rickroll.urls', ['nevergonnagiveyouup']);
    }

    public function test_config_changes()
    {
        $response = $this->get('nevergonnagiveyouup');
        $response->assertStatus(302);
        $response->assertRedirect('https://example.org');
    }
}
