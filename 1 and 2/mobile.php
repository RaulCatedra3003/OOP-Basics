<?php

class Mobile extends Device
{
  private $simType;

  function __construct($serialNumber, $size, $simType)
  {
    parent::__construct($serialNumber, $size);
    $this->simType = $simType;
  }

  public function getSimType()
  {
    return $this->simType;
  }
  public function setSimType($simType)
  {
    $this->simType = $simType;
  }
}
