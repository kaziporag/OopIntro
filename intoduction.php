<?php

/**
 * 
 * PHP OOP Introduction Class, Properties, Methods and Objects. 
 * 
 */

// Clsaa Start

class Intoduction {
    // Properties
    public $a, $b, $c;

    // Method
    function sum() {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    // Method
    function sub() {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
// Clsaa End

// Object Start
$c1 = new Intoduction();
$c1->a = 10;
$c1->b = 20;

$c2 = new Intoduction();
$c2->a = 40;
$c2->b = 30;
// Object End

// Print Value
echo "Sum Value of c1: " . $c1->sum() . "<br>";
echo "Sum Value of c2: " . $c2->sum() . "<br>";
echo "Subtruction Value of c2: ". $c2->sub() . "<br>";
echo "Subtruction Value of c1: ". $c1->sub() . "<br>";