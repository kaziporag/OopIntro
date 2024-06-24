<?php 

// Class 
abstract class parents {
    // Properties
    public $name;

    // Method
    abstract protected function calc( $a, $b );

}

class child extends parents {

    // Properties
    public function calc( $a, $b ) {

        return $a + $b;

    }
}

// Object
$obj = new child();
echo $obj->calc( 10, 5 ) . "<br>";