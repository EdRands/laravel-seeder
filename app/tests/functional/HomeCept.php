<?php

$I = new TestGuy($scenario);
$I->wantTo('view the welcome splash page');
$I->lookForwardTo('seeing the welcome message');

$I->amOnPage('/');
$I->see('Project seed is up and running', 'h1');

