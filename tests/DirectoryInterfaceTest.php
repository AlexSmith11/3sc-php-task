<?php

namespace cubeTest\tests;

use PHPUnit\Framework\TestCase;
use src\DirectoryInterface;

class DirectoryInterfaceTest extends TestCase {

    public function test_it_creates_a_new_instance() {

        $stub = $this->createMock(DirectoryInterface::class);
        $this->assertTrue($stub instanceof DirectoryInterface);
    }
}
