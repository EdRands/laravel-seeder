<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Check the home page shows the up and running message');

$I->amOnPage('/');
$I->seeResponseCodeIs(200);
$I->see('is planted and sprouted');
