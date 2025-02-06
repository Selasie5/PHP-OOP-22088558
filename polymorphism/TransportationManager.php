<?php

namespace polymorphism;
require_once  "Vehicle.php";
class TransportationManager
{
 public function operateVehicle(Vehicle $vehicle)
 {
     echo "Operating vehicle: \n";
     $vehicle->calculateRange();
 }

 //@Overload(compile-time polymorphism)
    public function refuelVehicle(Vehicle $vehicle, $liters)
    {
        echo "Refueling vehicle: \n";
        $vehicle->refuel($liters);
    }
}