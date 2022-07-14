<?php
require_once('car.php');
require_once('uberX.php');
require_once('uberBlack.php');
require_once('uberVan.php');
require_once('uberPool.php');
require_once('account.php');

$uberX = new UberX("CVD$#", new Account("Juan", "adf886"), "Volkswagen", "Parati");
$uberX->printDataCar();

$uberPool = new UberPool("FFS543", new Account("Yvan", "FFFf886"), "Volkswagen", "Gol");
$uberPool->printDataCar();
