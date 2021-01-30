<?php

namespace Tipoff\RemoteMonitoring;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tipoff\RemoteMonitoring\RemoteMonitoring
 */
class RemoteMonitoringFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'remote-monitoring';
    }
}
