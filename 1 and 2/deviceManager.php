<?php
require 'device.php';
require 'mobile.php';
require 'tablet.php';

class DeviceManager
{
  public function getDeviceSerialNumber(Device $device)
  {
    return $device->getSerialNumber();
  }
}

$mobile = new Mobile(123, 11, "nano");
$tablet = new Tablet(456, 16, 321);

$deviceManager = new DeviceManager();


echo $deviceManager->getDeviceSerialNumber($mobile);
echo '<br>';
echo $deviceManager->getDeviceSerialNumber($tablet);
