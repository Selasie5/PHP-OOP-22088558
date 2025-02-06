<?php

use polymorphism\Car;
use polymorphism\TransportationManager;

require_once  "Vehicle.php";
require_once "Car.php";
require_once "TransportationManager.php";

$car =  new  Car("C300","Sedan",100,70);

$transportationManager =  new TransportationManager();
$transportationManager-> refuelVehicle($car, 20);

$transportationManager->operateVehicle($car);