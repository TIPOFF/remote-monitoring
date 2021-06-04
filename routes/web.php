<?php

use Illuminate\Support\Facades\Route;
use Tipoff\RemoteMonitoring\Http\Controllers\RemoteMonitoringController;

Route::get('/', [RemoteMonitoringController::class, 'index'])->name('remote-monitoring.index');
