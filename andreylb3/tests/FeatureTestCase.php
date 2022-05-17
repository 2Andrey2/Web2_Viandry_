<?php

namespace viandry\andreylb3\Test;

use Orchestra\Testbench\TestCase;

class FeatureTestCase extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->setUpDatabase();
    }

    protected function getPackageProviders($app)
    {
        return [
            'viandry\andreylb3\Providers\ShopServiceProvider',
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'mysql');
        $app['config']->set('database.connections.mysql', [
            'driver' => 'mysql',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function setUpDatabase()
    {
        $this->artisan('migrate')->run();
    }

}