<?php

class Device
{
  protected $serialNumber;
  protected $size;

  function __construct($serialNumber, $size)
  {
    $this->serialNumber = $serialNumber;
    $this->size = $size;
  }


  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  public function getSize()
  {
    return $this->size;
  }
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  public function setSize($size)
  {
    $this->size = $size;
  }
}
