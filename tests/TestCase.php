<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations;

    /**
     * Tear down the test
     */
    public function tearDown() {
        $this->artisan('migrate:reset');
        parent::tearDown();
    }
}
