<?php


namespace Models;


use src\DirectoryInterface;
use src\FileInterface;
use src\FileSystemInterface;

class FileSystem implements FileSystemInterface
{
    public function createFile(FileInterface $file, DirectoryInterface $parent)
    {
        // TODO: Implement createFile() method.

    }

    public function updateFile(FileInterface $file)
    {
        // TODO: Implement updateFile() method.
    }

    public function renameFile(FileInterface $file, $newName)
    {
        // TODO: Implement renameFile() method.
    }

    public function deleteFile(FileInterface $file)
    {
        // TODO: Implement deleteFile() method.
    }

    public function createRootDirectory(DirectoryInterface $directory)
    {
        // TODO: Implement createRootDirectory() method.
    }

    public function createDirectory(DirectoryInterface $directory, DirectoryInterface $parent)
    {
        // TODO: Implement createDirectory() method.
        $path = $parent->getPath() . "\\" . $directory->getName();
        mkdir($path);
    }

    public function deleteDirectory(DirectoryInterface $directory)
    {
        // TODO: Implement deleteDirectory() method.
    }

    public function renameDirectory(DirectoryInterface $directory, $newName)
    {
        // TODO: Implement renameDirectory() method.
    }

    public function getDirectoryCount(DirectoryInterface $directory)
    {
        // TODO: Implement getDirectoryCount() method.
    }

    public function getFileCount(DirectoryInterface $directory)
    {
        // TODO: Implement getFileCount() method.
    }

    public function getDirectorySize(DirectoryInterface $directory)
    {
        // TODO: Implement getDirectorySize() method.
    }

    public function getDirectories(DirectoryInterface $directory)
    {
        // TODO: Implement getDirectories() method.
        $directories = glob(__FILE__ . '/*' , GLOB_ONLYDIR);
    }

    public function getFiles(DirectoryInterface $directory)
    {
        // TODO: Implement getFiles() method.
    }
}