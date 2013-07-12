<?php

return array(
    'default' => 'memory',
    'connections' => array(
        'memory' => array(
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ),
    ),
);
