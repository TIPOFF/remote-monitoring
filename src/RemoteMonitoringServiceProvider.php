<?php

declare(strict_types=1);

namespace Tipoff\RemoteMonitoring;

use Tipoff\RemoteMonitoring\Models\RemoteMonitoring;
use Tipoff\RemoteMonitoring\Policies\RemoteMonitoringPolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class RemoteMonitoringServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                RemoteMonitoring::class => RemoteMonitoringPolicy::class,
            ])
            ->name('remote-monitoring')
            ->hasConfigFile();
    }
}
