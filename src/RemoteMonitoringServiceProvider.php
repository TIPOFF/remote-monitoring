<?php

declare(strict_types=1);

namespace Tipoff\RemoteMonitoring;

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
}
