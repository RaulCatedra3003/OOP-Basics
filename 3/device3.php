<?php


abstract class Device3
{
  protected $name;
  protected $serialNo;

  function __construct($name, $serialNo)
  {
    $this->name = $name;
    $this->serialNo = $serialNo;
  }

  abstract function getDetail($deviceId);

  function getId()
  {
    return $this->name;
  }

  function getSerialNo()
  {
    return $this->serialNo;
  }
};
