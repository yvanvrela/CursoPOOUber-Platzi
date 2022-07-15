<?php
require_once('car.php');
class UberVan extends Car
{
    public $typeCarAccepted;
    public $seatsMaterial;

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial)
    {
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }

    // Setter modificado
    public function setPassenger($passenger)
    {
        if ($passenger == 6) {
            $this->passenger = $passenger;
        }
        else {
            echo "Necesita asignar 6 pasajeros";
        }
    }
}
