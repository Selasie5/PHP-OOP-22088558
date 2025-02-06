<?php
require_once 'Employee.php';

class FullTimeEmployee extends Employee {
    // Encapsulated attribute
    private $salary;

    // Constructor
    public function __construct($name, $employeeId, $salary) {
        parent::__construct($name, $employeeId); // Call parent constructor
        $this->salary = $salary;
    }

    // Getter for salary
    public function getSalary() {
        return $this->salary;
    }

    // Implement calculatePay() method
    public function calculatePay() {
        return "FullTimeEmployee Pay: $" . number_format($this->salary, 2);
    }
}
