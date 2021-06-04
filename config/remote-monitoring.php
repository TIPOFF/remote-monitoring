<?php

return [
    'routes' => [
        'prefix' => env('REMOTE_MONITORING_ROUTE_PREFIX', 'remote-monitoring'),
        'middleware' => [
            'auth',
        ],
    ],
];
