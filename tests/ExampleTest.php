<?php

declare(strict_types=1);

namespace PhilippWitzmann\Testing;

use stdClass;

/**
 * Example test case to show that template pattern works.
 *
 * @author Philipp Witzmann <philipp@philippwitzmann.de>
 */
class ExampleTest extends TestCase
{
    /**
     * Sets up the Testenvironment for each specific test.
     *
     * @return void
     */
    protected function setUpTest(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Reverts the environment back its state before these tests started.
     *
     * @return void
     */
    protected function tearDownTest(): void
    {
        $this->assertTrue(true);
    }

    public function testTemplatePatternWorks(): void
    {
        $sampleClass = mock(stdClass::class);
        $sampleClass->expects()->foo();
        $sampleClass->foo();
    }

    public function testFakerIsWorking(): void
    {
        $this->assertTrue(is_string($this->faker->name));
    }
}