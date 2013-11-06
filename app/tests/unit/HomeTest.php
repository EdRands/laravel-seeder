<?php

use Way\Tests\Assert; /* https://github.com/JeffreyWay/Laravel-Test-Helpers#assert-and-should */
use Way\Tests\Should;

class HomeTest extends TestCase
{

    /**
     * Test that the front page loads.
     *
     * @return void
     */
    public function testHomePageIsWorking()
    {
        $crawler = $this->client->request('GET', '/');

        Assert::true($this->client->getResponse()->isOk());
    }

}
