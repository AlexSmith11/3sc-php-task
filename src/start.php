<?php

namespace src;

require_once __DIR__ . '/FileInterface.php';
require_once "Models/File.php";
require_once __DIR__ . '/DirectoryInterface.php';
require_once "Models/Directory.php";
require_once __DIR__ . '/FileSystemInterface.php';
require_once "Models/FileSystem.php";

require_once __DIR__ . '/Utilities/Utilities.php';
require_once __DIR__ . '/Controllers/FileController.php';

use Models\File;
use Models\FileSystem;
use Models\Directory;

/**
 * We shall treat the 'images' dir as the root directory / parent of the file system.
 */

$fileSystem = new FileSystem();

/**
 * here we query the user through the CLI and i.e create a new file/directory.
 * - create a new instance of a file & set its properties. then save it.
 *
 * create a way to fetch files/directories - to do this:
 * create a new instance of a file/dir, enter its name in the CLI, get the properties of the file/dir using the name given.
 * TODO: But this creates a new instance - what if we want to rename/modify?
 */

$str = "what would you like to do? 
To create a file, enter 'create file'.
To update a file, enter 'update file'
...";

echo $str;
$line = getUserInput();

// switch case for user input, yay
switch ($line) {
    case "create file":
        $newFile = createNewFile();
        $fileSystem->createFile($newFile, $newFile->getParentDirectory());
}
