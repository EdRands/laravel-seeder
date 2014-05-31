<?php

use \TestCase;
use Way\Tests\Assert;

class HomeTest extends TestCase {

    /**
     * Test that the front page loads.
     *
     * @return void
     */
    public function testHomePageIsWorking() {
        $this->client->request('GET', '/');

        Assert::true($this->client->getResponse()->isOk());
    }
}
