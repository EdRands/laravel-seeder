<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Debugbar Settings
      |--------------------------------------------------------------------------
      |
      | Debugbar is enabled by default, when debug is set to true in app.php.
      |
     */
    'enabled' => \Config::get('app.debug'),
    /*
      |--------------------------------------------------------------------------
      | Vendors
      |--------------------------------------------------------------------------
      |
      | Vendor files are included by default, but can be set to false.
      | This can also be set to 'js' or 'css', to only include javascript or css vendor files.
      | Vendor files are for css: font-awesome (including fonts) en for js: jquery 1.8.3
      |
     */
    'include_vendors' => true,
    /*
      |--------------------------------------------------------------------------
      | Capture Ajax Requests
      |--------------------------------------------------------------------------
      |
      | The Debugbar can capture Ajax requests and display them. If you don't want this (ie. because of errors),
      | you can use this option to disable sending the data through the headers.
      |
     */
    'capture_ajax' => true,
    /*
      |--------------------------------------------------------------------------
      | DataCollectors
      |--------------------------------------------------------------------------
      |
      | Enable/disable DataCollectors
      |
     */
    'collectors' => [
        /* Php version */
        'phpinfo' => false,
        /* Messages */
        'messages' => true,
        /* Time Datalogger */
        'time' => true,
        /* Memory usage */
        'memory' => true,
        /* Exception displayer */
        'exceptions' => true,
        /* Logs from Monolog (merged in messages if enabled) */
        'log' => true,
        /* Show database (PDO) queries and bindings */
        'db' => true,
        /* Views with their data */
        'views' => false,
        /* Current route information */
        'route' => false,
        /* Laravel version and environment */
        'laravel' => false,
        /* All events fired */
        'events' => false,
        /* Twig, requires barryvdh/laravel-twigbridge */
        'twig' => false,
        /* Regular or special Symfony request logger. Only one can be enabled. */
        'default_request' => false,
        'symfony_request' => false,
        /* Catch mail messages */
        'mail' => false,
        /* Add the latest log messages */
        'logs' => false,
        /* Show the included files */
        'files' => false,
        /* Display config settings */
        'config' => false,
    ],
    /*
      |--------------------------------------------------------------------------
      | Extra options
      |--------------------------------------------------------------------------
      |
      | Configure some DataCollectors
      |
     */
    'options' => [
        'pdo' => [
            /* Render SQL with the parameters substituted */
            'with_params' => true,
            /* The character to surround params */
            'quotation_char' => '`',
            /* Add extra connections to the PDO Collector */
            'extra_connections' => []
        ],
        'mail' => [
            'full_log' => false
        ],
        'views' => [
            'data' => true,
        ],
        'route' => [
            /* Show complete route on bar */
            'label' => true
        ]
    ],
    /*
      |--------------------------------------------------------------------------
      | Inject Debugbar in Response
      |--------------------------------------------------------------------------
      |
      | Usually, the debugbar is added just before <body>, by listening to the
      | Response after the App is done. If you disable this, you have to add them
      | in your template yourself. See http://phpdebugbar.com/docs/rendering.html
      |
     */
    'inject' => true,
];
