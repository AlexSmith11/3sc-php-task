<?php


namespace Controllers;

use DateTimeInterface;
use DateTime;
use src\DirectoryInterface;
use src\FileInterface;

class File implements FileInterface
{
    public function getName()
    {
        echo "hi";
        // TODO: Implement getName() method.
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
    }

    public function getSize()
    {
        // TODO: Implement getSize() method.
    }

    public function setSize($size)
    {
        // TODO: Implement setSize() method.
    }

    public function getCreatedTime()
    {
        // TODO: Implement getCreatedTime() method.
    }

    public function setCreatedTime(DateTimeInterface $created)
    {
        // TODO: Implement setCreatedTime() method.
    }

    public function getModifiedTime()
    {
        // TODO: Implement getModifiedTime() method.
    }

    public function setModifiedTime(DateTimeInterface $modified)
    {
        // TODO: Implement setModifiedTime() method.
    }

    public function getParentDirectory()
    {
        // TODO: Implement getParentDirectory() method.
    }

    public function setParentDirectory(DirectoryInterface $parent)
    {
        // TODO: Implement setParentDirectory() method.
    }

    public function getPath()
    {
        // TODO: Implement getPath() method.
    }
}