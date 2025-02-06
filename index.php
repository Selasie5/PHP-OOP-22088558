<?php

//Class definitions
require_once 'CommissionEmployee.php';
require_once  "BasePlusCommissionEmployee.php";

//Instance creation of CommissionEmployeeClass
$employee = new CommissionEmployee("James","Bond","123-45-6789",5000.00,0.1);
echo "Commission-only Employee: \n";
$employee->display();
echo"\n";


//Instance of  BasePlusCommissionEmployee
$bpcEmployee = new BasePlusCommissionEmployee("Agnes", "Brown", "135-79-2579",8000.00,0.4,120000);
echo "Base + Commission Employee: \n";
$bpcEmployee ->display();
echo"\n";


echo "Calculating Earnings: \n";
echo "Commission-only Employee: $" . number_format($employee->earnings(),2);
echo "Base Salary + Commission Employee Earnings: $" . number_format($bpcEmployee->earnings(),2);
echo "\n";
//echo "Initial Employee Details:\n";
//echo $employee;

////Updating grossSales and commissionRate
//$employee->setGrossSales(10000.00);
//$employee->setCommissionRate(0.5);


echo "Updating Base Salary for BasePlusCommissionEmployee: \n";
$bpcEmployee -> setBaseSalary(230000);
echo "Update Base Salary : $" . number_format($bpcEmployee ->getBaseSalary(),2) . "\n";

echo "Updated Earnings: $" . number_format($bpcEmployee ->earnings(),2). "\n";



//Display updated employee details
//echo "\nUpdated employee details:\n";
//echo "\n-------------------------\n";
//echo $employee;
//
//echo "\n-------------------------\n";
////Calculate & display earnings
//echo "\nEarnings: $" . number_format($employee->earnings(),2)."\n";

