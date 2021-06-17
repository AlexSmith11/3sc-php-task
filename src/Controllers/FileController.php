<?php

use Models\Directory;
use Models\File;

function createNewFile() {
    $newFile = new File();

    echo "enter the files name: ";
    $newFile->setName(getUserInput());

    echo "enter the files size in KB: ";    // might just automate this, not sure why the user should have to enter it.
    $newFile->setSize(getUserInput());

    echo "enter the directory you wish to place this: ";
    // get parent dir from user input
    $parentDirName = getUserInput();
    // get the dir object using its name


    $newFile->setParentDirectory();

    return $newFile;
}