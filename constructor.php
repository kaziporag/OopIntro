<?php 
/**
 * 
 * A basic understanding of constructor. 
 * 
 */

 // Clsaa Start
 class person {
// Properties
    public $name;
    public $age;
// Constructor
    function __construct( $name = "No Name", $age = 0 ) {
        $this->name = $name;
        $this->age = $age;
    }
// Method
    function show() {
        echo "Name: " . $this->name . " And Age: " . $this->age . "<br>";
    }
 }

 // Class End

 // Object Start
 $p1 = new person( "Kazi", 25 );
 $p2 = new person( "Maliyat", 7 );
 $p3 = new person();
// Object End

// Print Value
 $p1->show();
 $p2->show();
 $p3->show();