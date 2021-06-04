<?php

declare(strict_types=1);

namespace Tipoff\RemoteMonitoring;

use Illuminate\Support\Facades\Route;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class RemoteMonitoringServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->name('remote-monitoring')
            ->hasConfigFile();
    }

    public function boot()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('remote-monitoring.routes.prefix'),
            'middleware' => config('remote-monitoring.routes.middleware'),
        ];
    }
}
