<?php
require_once('car.php');
require_once('uberX.php');
require_once('uberBlack.php');
require_once('uberVan.php');
require_once('uberPool.php');
require_once('account.php');

$uberX = new UberX("CVD$#", new Account("Juan", "adf886"), "Volkswagen", "Parati");
$uberX->setPassenger(4);
$uberX->printDataCar();

$uberVan = new UberVan("ASD234", new Account("Ricardo", "GRT321"), "dd", "aaa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();
