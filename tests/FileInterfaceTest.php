<?php

namespace Tests;

require_once __DIR__ . '/../src/FileInterface.php';

use PHPUnit\Framework\TestCase;
use src\FileInterface;

class FileInterfaceTest extends TestCase {

    public function test_it_creates_a_new_instance() {

        $stub = $this->createMock(FileInterface::class);
        $this->assertTrue($stub instanceof FileInterface);
    }
}
