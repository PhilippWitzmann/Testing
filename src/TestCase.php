<?php

declare(strict_types=1);

namespace PhilippWitzmann\Testing;

use Faker\Factory;
use Faker\Generator;
use Mockery;
use PHPUnit\Framework\TestCase as PhpUnitTestCase;

/**
 * All tests should extend this TestCase. It provides some possibilities to perform custom Test setup/teardown
 * which won't have any impact on our default setup/teardown.
 *
 * @author Philipp Witzmann <philipp@philippwitzmann.de>
 */
abstract class TestCase extends PhpUnitTestCase
{

    /** @var Generator */
    protected $faker;

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    final protected function setUp(): void
    {
        parent::setUp();

        Mockery::globalHelpers();

        if (method_exists($this, 'setUpSpecialized'))
        {
            $this->setUpSpecialized();
        }

        $this->faker = Factory::create();

        $this->setUpTest();
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    final protected function tearDown(): void
    {
        $this->tearDownTest();

        Mockery::close();

        parent::tearDown();
    }

    /**
     * Sets up the Testenvironment for each specific test.
     *
     * @return void
     */
    abstract protected function setUpTest(): void;

    /**
     * Reverts the environment back its state before these tests started.
     *
     * @return void
     */
    abstract protected function tearDownTest(): void;
}