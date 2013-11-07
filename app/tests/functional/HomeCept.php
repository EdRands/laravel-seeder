<?php

$I = new TestGuy($scenario);
$I->wantTo('view the planted splash page');
$I->lookForwardTo('seeing the planted message');

$I->amOnPage('/');
$I->see('is planted and sprouted', 'h1');
