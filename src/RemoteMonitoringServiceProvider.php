<?php

namespace Tipoff\RemoteMonitoring;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tipoff\RemoteMonitoring\Commands\RemoteMonitoringCommand;

class RemoteMonitoringServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('remote-monitoring')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_remote_monitoring_table')
            ->hasCommand(RemoteMonitoringCommand::class);
    }
}
