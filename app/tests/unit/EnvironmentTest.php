<?php

/* https://github.com/JeffreyWay/Laravel-Test-Helpers#assert-and-should */
use Way\Tests\Assert;
use Way\Tests\Should;
/* https://github.com/JeffreyWay/Laravel-Test-Helpers#factories */
use Way\Tests\Factory;

class EnvironmentTest extends TestCase
{
    /**
     * Description
     *
     * @return void
     */
    public function testThisIsTestingEnvironment()
    {
        $this->assertSame(App::environment(), 'testing');
    }

}