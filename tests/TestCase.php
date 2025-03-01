<?php

namespace LukasMu\Rickroll\Tests;

use Illuminate\Support\Facades\File;
use LukasMu\Rickroll\RickrollServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            RickrollServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
        $this->afterApplicationCreated(function () {
            File::delete(config_path('rickroll.php'));
        });

        parent::setUp();
    }
}
