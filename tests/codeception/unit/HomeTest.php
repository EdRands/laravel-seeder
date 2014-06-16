<?php

use Way\Tests\Assert;

class HomeTest extends TestCase {

    /**
     * Test that the front page loads.
     *
     * @return void
     */
    public function testHomePageIsWorking() {
        $this->call('GET', '/');

        $this->assertResponseOk();
    }
}
