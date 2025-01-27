<?php

namespace src;

use \DateTimeInterface;

interface FileInterface
{
  /**
   * @return string
   */
  public function getName();

  /**
   * @param string $name
   *
   * @return $this
   */
  public function setName($name);

  /**
   * @return int
   */
  public function getSize();

  /**
   * @param int $size
   *
   * @return $this
   */
  public function setSize($size);

  /**
   * @return DateTime
   */
  public function getCreatedTime();

  /**
   * @param DateTimeInterface $created
   *
   * @return $this
   */
  public function setCreatedTime(DateTimeInterface $created);

  /**
   * @return DateTimeInterface
   */
  public function getModifiedTime();

  /**
   * @param DateTimeInterface $modified
   *
   * @return $this
   */
  public function setModifiedTime(DateTimeInterface $modified);

  /**
   * @return DirectoryInterface
   */
  public function getParentDirectory();

  /**
   * @param DirectoryInterface $parent
   *
   * @return $this
   */
  public function setParentDirectory(DirectoryInterface $parent);

  /**
   * @return string
   */
  public function getPath();
}
