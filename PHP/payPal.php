<?php
require_once('payment.php');
class PayPal extends Payment
{
    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }
}
