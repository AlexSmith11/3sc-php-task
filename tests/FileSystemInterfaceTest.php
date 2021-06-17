<?php

namespace cubeTest\tests;

require_once __DIR__ . '/../src/FileSystemInterface.php';

use PHPUnit\Framework\TestCase;
use src\FileSystemInterface;

class FileSystemInterfaceTest extends TestCase {

    public function test_it_creates_a_new_instance() {

        $stub = $this->createMock(FileSystemInterface::class);
        $this->assertTrue($stub instanceof FileSystemInterface);
    }
}
