<?php

$controllerNamespace = 'EdRands\\Seeder\\Controllers\\';

Route::get('/', ['as' => 'home', 'uses' => $controllerNamespace.'SplashController@splash']);
