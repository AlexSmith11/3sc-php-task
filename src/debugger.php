<?php

namespace src;

require_once __DIR__ . '/FileInterface.php';
require_once "Controllers/File.php";
require_once __DIR__ . '/DirectoryInterface.php';
require_once "Controllers/Directory.php";
require_once __DIR__ . '/FileSystemInterface.php';
require_once "Controllers/FileSystem.php";

use Controllers\File;

$temp = new File();
$temp->getName();