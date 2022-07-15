<?php
class Car
{
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar()
    {
        echo "
                license: $this->license, <br>
                Conductor: {$this->driver->name}, <br>
                Document: {$this->driver->document} <br>
                Pasajeros: $this->passenger <br><br>
            ";
    }

    // Getter
    public function getPassenger()
    {
        return $this->passegenger;
    }

    // Setter
    public function setPassenger($passenger)
    {
        if ($passenger == 4) {
            $this->passenger = $passenger;
        } else {
            echo "Necesita asignar 4 pasajeros";
        }
    }
}
