<?php

namespace src;

require_once __DIR__ . '/FileInterface.php';
require_once "Controllers/File.php";

use Controllers\File;

$temp = new File();
$temp->getName();