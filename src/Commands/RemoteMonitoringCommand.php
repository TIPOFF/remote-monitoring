<?php

namespace Tipoff\RemoteMonitoring\Commands;

use Illuminate\Console\Command;

class RemoteMonitoringCommand extends Command
{
    public $signature = 'remote-monitoring';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
