<?php

return array(
    'debug' => true,
    'url' => 'http://example.dev',
    'providers' => append_config(array(
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
        'Barryvdh\Debugbar\ServiceProvider',
    )),
    'aliases' => append_config(array(
        'Debugbar' => 'Barryvdh\Debugbar\Facade',
    )),
);
