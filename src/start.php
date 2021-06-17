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
 * Read README for overview
 *
 * The controllers are static php files because they'd only be static classes anyway.
 * I honestly am unaware if this is a horrendous idea (I'm gonna say that it is), but this is absolutely one of the main reasons I'd love to work for 3 Sided Cube -
 * I really want to learn from you guys about OOP code structure/architecture/higher level things.
 */

/**
 * We shall treat the 'cubeTest' dir as the ultimate root directory / parent of the file system.
 * The user can then use createRootDirectory to create a new root next to 'images' & 'src'. all directory's and files will go in here.
 */

$fileSystem = new FileSystem();

// here we query the user through the CLI and i.e create a new file/directory.
$str = "what would you like to do? 
To create a file, enter 'create file'.
To update a file, enter 'update file'.
...
To create a directory, enter 'create dir'.
To delete a directory and its contents, enter ' delete dir'.
...
\n";

echo $str;
$line = getUserInput();

// switch case for user input, yay
switch ($line) {
    case "create file":
        $newFile = createNewFile();
        $fileSystem->createFile($newFile, $newFile->getParentDirectory());
        break;
    case "update file":
        echo "hi";
        break;
    default:
        break;
}
