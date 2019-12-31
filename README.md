# Testing

This library aims to provide basic functionality to write tests.

## Installation

````bash
composer require --dev philippwitzmann/testing
````

## Usage

### Create a new Test File
```php
<?php

use PhilippWitzmann\Testing\TestCase;

class SomeClassTest extends TestCase
{
    protected function setUpTest()
    {
        // Do Initialisation for your mocks and subject here
    }
    
    protected function tearDownTest()
    {
        // Revert any leftovers from your tests
    }
    
    public function testSomething()
    {
        $this->assertTrue(true);
    }
}
```