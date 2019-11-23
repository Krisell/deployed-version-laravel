<?php

namespace Krisell\DeployedVersionLaravel\Tests;

use Orchestra\Testbench\TestCase;

class DeployedVersionTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return ['Krisell\DeployedVersionLaravel\DeployedVersionServiceProvider'];
    }

    /** @test */
    public function the_version_route_is_added_and_uses_prefix_set_in_env()
    {
        $this->get('dev-custom/version')->assertStatus(200);
    }

    /** @test */
    public function the_default_version_is_TESTING_VALUE()
    {
        $this->get('dev-custom/version')->assertJson(['version' => 'TESTING_VALUE']);
    }

    /** @test */
    public function the_version_can_be_set_in_the_environment()
    {
        config(['deployed-version.version' => 'NEW_TESTING_VALUE']);
        $this->get('dev-custom/version')->assertJson(['version' => 'NEW_TESTING_VALUE']);
    }
}
