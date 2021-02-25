<?php

class Tablet extends Device
{
  private $penSerialNumber;

  function __construct($serialNumber, $size, $penSerialNumber)
  {
    parent::__construct($serialNumber, $size);
    $this->penSerialNumber = $penSerialNumber;
  }

  public function getPenSerialNumber()
  {
    return $this->penSerialNumber;
  }
  public function setPenSerialNumber($penSerialNumber)
  {
    $this->penSerialNumber = $penSerialNumber;
  }
}
