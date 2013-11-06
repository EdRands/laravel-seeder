<?php

use Way\Tests\Assert; /* https://github.com/JeffreyWay/Laravel-Test-Helpers#assert-and-should */
use Way\Tests\Should;
use Way\Tests\Factory; /* https://github.com/JeffreyWay/Laravel-Test-Helpers#factories */

class EnvironmentTest extends TestCase
{

    /**
     * Test if we are in the testing environment.
     *
     * @return void
     */
    public function testThisIsTestingEnvironment()
    {
        Assert::Same(App::environment(), 'testing');
    }

}
