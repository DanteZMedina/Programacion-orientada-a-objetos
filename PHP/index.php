<?php

require_once('car.php');
require_once('UberX.php');
require_once('UberPool.php');
require_once('account.php');

$uberX = new UberX("AANG123", new Account("Andrea Mendoza", "aSD432"), "Tesla", "X");
$uberX->printDataCar();

$uberPool = new UberPool("AANG123", new Account("Andrea Mendoza", "aSD432"), "Tesla", "X");
$uberPool->printDataCar();

$car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
$car->printDataCar();