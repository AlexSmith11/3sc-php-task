<?php


namespace Controllers;

use DateTimeInterface;
use src\DirectoryInterface;

class Directory implements DirectoryInterface
{

    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function setName($name)
    {
        // TODO: Implement setName() method.
    }

    public function getCreatedTime()
    {
        // TODO: Implement getCreatedTime() method.
    }

    public function setCreatedTime(DateTimeInterface $created)
    {
        // TODO: Implement setCreatedTime() method.
    }

    public function getPath()
    {
        // TODO: Implement getPath() method.
        return dirname(__FILE__);
    }

    public function setPath($path)
    {
        // TODO: Implement setPath() method.
    }
}