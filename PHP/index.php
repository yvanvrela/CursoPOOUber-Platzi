<?php
require_once('car.php');
require_once('account.php');

$car = new Car("AMD123", new Account("Juan Emiliano", "DMA356"));
$car->printDataCar();
