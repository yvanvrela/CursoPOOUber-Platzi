<?php
require_once('payment.php');
class Tarjeta extends Payment
{
    public $number;
    public $cvv;
    public $date;

    public function __construct($number, $cvv, $date)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->date = $date;
    }
}
