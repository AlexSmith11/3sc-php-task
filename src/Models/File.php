<?php


namespace Models;

use DateTimeInterface;
use DateTime;
use src\DirectoryInterface;
use src\FileInterface;

class File implements FileInterface
{
    private $fileName = "";
    private $fileSize = 0;
    private $fileCreatedTime;
    private $fileModifiedTime;
    private $fileParentDir = "";
    private $filePath = "";

    public function getName()
    {
        return $this->fileName;
    }

    public function setName($name)
    {
        $this->fileName = $name;
    }

    // maybe you are building cloud storage/hosting this project and want to set a file size cap
    public function getSize()
    {
        return $this->fileSize;
    }

    public function setSize($size)
    {
        $this->fileSize = $size;
    }

    public function getCreatedTime()
    {
        return $this->fileCreatedTime;
    }

    public function setCreatedTime(DateTimeInterface $created)
    {
        $this->fileCreatedTime = $created;
    }

    public function getModifiedTime()
    {
        return $this->fileModifiedTime;
    }

    public function setModifiedTime(DateTimeInterface $modified)
    {
        $this->fileModifiedTime = $modified;
    }

    public function getParentDirectory()
    {
        return $this->fileParentDir;
    }

    public function setParentDirectory(DirectoryInterface $parent)
    {
        $this->fileParentDir = $parent;
    }

    public function getPath()
    {
        return $this->filePath;
    }
}