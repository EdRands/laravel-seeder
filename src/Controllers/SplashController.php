<?php

namespace EdRands\Seeder\Controllers;

use View;

class SplashController extends BaseController {

    public function splash() {
        return View::make('splash');
    }
}
