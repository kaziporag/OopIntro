<?php 

// Class
class employee{

    // Properties
    public $name;
    public $age;
    public $address;
    public $salary;
    
    // Constructor
    public function __construct($name, $age, $address, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->salary = $salary;
    }

    public function display(){
        echo "<h1>Employee Details</h1>";
        echo "Name: " . $this->name . " Age: " . $this->age . " Address: " . $this->address . " Salary: " . $this->salary . "<br>";
    }
}

// Inheritance class
class manager extends employee{
    // Properties
    public $department = "IT";
    public $ta = 2000;
    public $bonus = 5000;
    public $totalsalary;

    // Method
    public function display(){

        $this->totalsalary = $this->salary + $this->bonus + $this->ta;

        echo "<h1>Manager Details</h1>";
        echo "Department : " . $this->department . " | Name: " . $this->name . " | Age: " . $this->age . " | Address: " . $this->address . " | Salary: " . $this->totalsalary . "<br>";
    }
    
}

// Object
$employee1 = new employee("Tutol Islam", 25, "Dhaka", 50000);
$manager = new manager("Kazi Rabiul Islam", 37, "Dhaka", 50000);

// Display
$employee1->display();
$manager->display();