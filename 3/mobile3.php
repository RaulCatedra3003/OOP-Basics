<?php
require('device3.php');

class Mobile extends Device3
{

  function __construct($name, $serialNo)
  {
    parent::__construct($name, $serialNo);
  }

  function getDetail($deviceId)
  {
    return "This is a Mobile by {$this->getId()}";
  }
};

class Laptop extends Device3
{
  function __construct($name, $serialNo)
  {
    parent::__construct($name, $serialNo);
  }

  function getDetail($deviceId)
  {
    return 'This is a Laptop';
  }
};

$mobile = new Mobile('samsung', 123);
$laptop = new Laptop('acer', 123);

echo $mobile->getDetail(1);
echo '<br>';
echo $laptop->getDetail(1);
