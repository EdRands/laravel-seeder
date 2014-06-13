<?php

echo Navbar::create(null, Navbar::FIX_TOP)
    ->with_brand(Config::get('project.name.short', 'Project'), url('/'))
    ->with_menus(Navigation::links([
            [trans('navigation.home'), url('/'), null, null, null, 'home']
    ]))
    ->collapsible();
