<?php

namespace polymorphism;

 abstract class Vehicle
{
    protected $vehicleId;
    protected $model;
    protected $fuelLevel;

    //Constructor
     public function __constructor($vehicleId, $model, $fuelLevel)
     {
         $this->vehicleId = $vehicleId;
         $this->model = $model;
         $this->fuelLevel = $fuelLevel;
     }

     //Refuel Method
     public function refuel($liters)
     {
         if($liters > 0)
         {
             $this->fuelLevel += $liters;
             echo "Refueled $liters liters . Updated fuel level: $this->fuelLevel liters.\n";
         }
         else{
             echo "Invalid fuel amount. Refueling failed. \n";
         }
     }

     abstract  public function calculateRange();
}