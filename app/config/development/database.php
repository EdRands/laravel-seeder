<?php

return array(
    'default' => 'sqlite',
    'connections' => array(
        'sqlite' => array(
            'driver' => 'sqlite',
            'database' => __DIR__.'/../../database/development.sqlite',
            'prefix' => '',
        ),
        'mysql' => array(
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'homestead',
            'username' => 'homestead',
            'password' => 'secret',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ),
        'pgsql' => array(
            'driver' => 'pgsql',
            'host' => 'localhost',
            'database' => 'homestead',
            'username' => 'homestead',
            'password' => 'secret',
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
        ),
    ),
);
