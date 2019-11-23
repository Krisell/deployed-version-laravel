<?php

namespace Krisell\DeployedVersionLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Krisell\DeployedVersionLaravel\Http\Controllers\VersionController;

class DeployedVersionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::get(config('deployed-version.route-prefix') . '/version', VersionController::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/deployed-version.php',
            'deployed-version'
        );
    }
}
