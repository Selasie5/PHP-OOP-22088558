<?php

class CommissionEmployee
{
    //Private attribute definition
    private $firstName;
    private $lastName;
    private $socialSecurityNumber;
    private $grossSales;
    private $commissionRate;

    //Constructor to initialize employee object attributes
    public function __construct($firstName,$lastName,$socialSecurityNumber,$grossSales,$commissionRate)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setSocialSecurityNumber($socialSecurityNumber);
        $this->setGrossSales($grossSales);
        $this->setCommissionRate($commissionRate);
    }

    //Getters and setters Methods

    //First Name Methods
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
         $this->firstName = $firstName;
    }

    //Last Name Methods
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
         $this->lastName = $lastName;
    }

    //SocialSecurityNumber Methods
    public function getSocialSecurityNumber()
    {
        return $this->socialSecurityNumber;
    }

    public function setSocialSecurityNumber($socialSecurityNumber)
    {
   $this->socialSecurityNumber =$socialSecurityNumber;
    }

    //grossSales Methods
    public function getGrossSales()
    {
        return $this->grossSales;
    }

    public function setGrossSales($grossSales)
    {
        if ($grossSales >= 0.0) {
            $this->grossSales = $grossSales;
        } else {
            throw new InvalidArgumentException("Gross sales must be greater than or equal to 0.0");
        }
    }

    //Commission Rate Methods
    public function getCommissionRate()
{
    return $this->commissionRate;
}

public function setCommissionRate($commissionRate)
{
    if($commissionRate > 0.0 && $commissionRate < 1.0)
    {
        $this->commissionRate = $commissionRate;
    }
    else{
        throw new InvalidArgumentException("Commission rate must be between 0.0 and 1.0");
    }
}


public function earnings()
{
    return $this->grossSales * $this->commissionRate;
}

public function __toString()
{
    return sprintf(
        "Employee: %s %s\nSocial Security Number: %s\nGross Sales: %.2f\nCommission Rate: %.2f\n",
        $this->firstName,
        $this->lastName,
        $this->socialSecurityNumber,
        $this->grossSales,
        $this->commissionRate
    );
}

//Implemented this based on the inheritance task
public function display()
{
    echo "Commission Employee Details:\n";
    echo "Name:" . $this->firstName . " " . $this->lastName . "\n";
    echo "Social Security Number: " . $this->socialSecurityNumber . "\n";
    echo "Gross Sales:" . $this->grossSales . "\n";
    echo "CommissionRate: " . $this->commissionRate . "\n";
    echo "Earnings: $" . number_format($this->earnings(),2) . "\n";
 }
}