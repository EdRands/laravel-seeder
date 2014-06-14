<?php

return [
    'default'     => 'memory',
    'connections' => [
        'memory' => [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ],
    ],
];
