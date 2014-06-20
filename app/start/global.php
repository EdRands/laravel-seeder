<?php

/*
  |--------------------------------------------------------------------------
  | Register The Laravel Class Loader
  |--------------------------------------------------------------------------
  |
  | In addition to using Composer, you may use the Laravel class loader to
  | load your controllers and models. This is useful for keeping all of
  | your classes in the "global" namespace without Composer updating.
  |
 */

ClassLoader::addDirectories([
    app_path().'/database/seeds',
]);

/*
  |--------------------------------------------------------------------------
  | Application Error Logger
  |--------------------------------------------------------------------------
  |
  | Here we will configure the error logger setup for the application which
  | is built on top of the wonderful Monolog library. By default we will
  | build a basic log file setup which creates a single file for logs.
  |
 */

Log::useFiles(storage_path().'/logs/laravel.log');

/*
  |--------------------------------------------------------------------------
  | Application Error Handler
  |--------------------------------------------------------------------------
  |
  | Here you may handle any errors that occur in your application, including
  | logging them or displaying custom views for specific errors. You may
  | even register several error handlers to handle different types of
  | exceptions. If nothing is returned, the default error view is
  | shown, which includes a detailed stack trace during debug.
  |
 */

App::error(function(Exception $exception, $code) {
    Log::error($exception);
});

/*
  |--------------------------------------------------------------------------
  | Maintenance Mode Handler
  |--------------------------------------------------------------------------
  |
  | The "down" Artisan command gives you the ability to put an application
  | into maintenance mode. Here, you will define what is displayed back
  | to the user if maintenace mode is in effect for this application.
  |
 */

App::down(function() {
    return Response::make('Be right back!', 503);
});

/*
 * Other Required Files
 */

// Composers are located within our /src directory.
require_once base_path().'/src/composers.php';

// Filters are located within our /src directory.
require_once base_path().'/src/filters.php';

// Helpers are located within our /src directory.
require_once base_path().'/src/helpers.php';

// Observers are located within our /src directory.
require_once base_path().'/src/observers.php';

// Routes are located within our /src directory.
require_once base_path().'/src/routes.php';

// Services are located within our /src directory.
require_once base_path().'/src/services.php';
