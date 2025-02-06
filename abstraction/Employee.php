<?php
abstract class Employee {
    // Encapsulated attributes
    private $name;
    private $employeeId;

    // Constructor
    public function __construct($name, $employeeId) {
        $this->name = $name;
        $this->employeeId = $employeeId;
    }

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Getter for employeeId
    public function getEmployeeId() {
        return $this->employeeId;
    }

    // Abstract method to calculate pay
    abstract public function calculatePay();
}
