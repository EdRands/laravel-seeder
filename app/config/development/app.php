<?php

return [
    'debug' => true,
    'url' => 'http://example.dev',
    'providers' => append_config([
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
        'Barryvdh\Debugbar\ServiceProvider',
    ]),
    'aliases' => append_config([
        'Debugbar' => 'Barryvdh\Debugbar\Facade',
    ]),
];
