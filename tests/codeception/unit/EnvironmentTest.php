<?php

class EnvironmentTest extends TestCase {

    /**
     * Test if we are in the testing environment.
     *
     * @return void
     */
    public function testThisIsTestingEnvironment() {
        $this->assertSame(App::environment(), 'testing');
    }
}
