<?php
require_once('car.php');
class UberX extends Car
{
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model)
    {
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function printDataCar()
    {
        echo "
            license: $this->license <br>
            Conductor: {$this->driver->name} <br>
            Document: {$this->driver->document} <br>
            Marca: $this->brand <br>
            Modelo: $this->model <br>
            Pasajeros: $this->passenger <br><br>
        ";
    }
}
