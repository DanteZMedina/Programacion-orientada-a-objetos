<?php
require_once('car.php');
class UberVan extends Car 
{
    public $typecCarAccepted;
    public $seatsMaterial;


    public function __construct($license, $driver, $typecCarAccepted, $seatsMaterial)
    {
        parent::__construct($license, $driver);
        $this -> typecCarAccepted = $typecCarAccepted;
        $this -> seatsMaterial = $seatsMaterial;
    }
 
}
