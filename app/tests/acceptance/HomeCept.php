<?php

$I = new WebGuy($scenario);
$I->wantTo('Check the home page shows the up and running message');

$I->amOnPage('/');
$I->seeResponseCodeIs(200);
$I->see('Enhanced Laravel Project Seeder is up and running');
