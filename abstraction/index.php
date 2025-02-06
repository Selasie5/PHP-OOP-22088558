<?php
require_once 'Employee.php';
require_once 'FullTimeEmployee.php';

// Create a FullTimeEmployee object
$fullTimeEmployee = new FullTimeEmployee("John Doe", "E12345", 5000.00);

echo "Employee Name: " . $fullTimeEmployee->getName() . "\n";
echo "Employee ID: " . $fullTimeEmployee->getEmployeeId() . "\n";
echo "Salary: $" . number_format($fullTimeEmployee->getSalary(), 2) . "\n";


echo $fullTimeEmployee->calculatePay() . "\n";

// Update salary and test again
$fullTimeEmployee = new FullTimeEmployee("Jane Smith", "E67890", 7500.00);
echo $fullTimeEmployee->calculatePay() . "\n";