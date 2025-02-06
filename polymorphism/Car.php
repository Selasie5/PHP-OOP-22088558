<?php

namespace polymorphism;
require_once 'Vehicle.php';
class Car extends  Vehicle
{
    private $fuelEfficiency;

    //Constructor
    public function __construct($vehicleId,$model, $fuelLevel,$fuelEfficiency)
    {
        parent::__constructor($vehicleId,$model,$fuelLevel);
        $this->fuelEfficiency = $fuelEfficiency;
}
public function calculateRange()
{
    $range = $this->fuelLevel * $this->fuelEfficiency;
    echo "Vehicle ID: $this->vehicleId, Model: $this->model, Range: $range km\n";
    return $range;
}
}