<?php

//Class definition for Commission Employee
require_once 'CommissionEmployee.php';

//Instance creation of CommissionEmployeeClass
$employee = new CommissionEmployee("James","Bond","123-45-6789",5000.00,0.1);

echo "Initial Employee Details:\n";
echo $employee;

//Updating grossSales and commissionRate
$employee->setGrossSales(10000.00);
$employee->setCommissionRate(0.5);

//Display updated employee details
echo "\nUpdated employee details:\n";
echo "\n-------------------------\n";
echo $employee;

echo "\n-------------------------\n";
//Calculate & display earnings
echo "\nEarnings: $" . number_format($employee->earnings(),2)."\n";

