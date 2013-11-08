<?php

class HomeController extends BaseController {

    public function splash() {
        return View::make('splash');
    }
}
