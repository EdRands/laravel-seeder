<?php

echo Navbar::create(null, Navbar::FIX_TOP)
    ->with_brand(Config::get('project.name.short', 'Project'), url('/'))
    ->with_menus(Navigation::links([
            ['Home', url('/'), null, null, null, 'home']
    ]))
    ->collapsible();
