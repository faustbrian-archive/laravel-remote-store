<?php

declare(strict_types=1);

namespace Faust\RemoteStore\Tests;

use Faust\RemoteStore\RemoteStoreServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

/**
 * @coversNothing
 */
class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            RemoteStoreServiceProvider::class,
        ];
    }
}
