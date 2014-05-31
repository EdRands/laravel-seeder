<?php

use \TestCase;
use Way\Tests\Assert;

class EnvironmentTest extends TestCase {

    /**
     * Test if we are in the testing environment.
     *
     * @return void
     */
    public function testThisIsTestingEnvironment() {
        Assert::Same(App::environment(), 'testing');
    }
}
