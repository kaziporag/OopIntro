<?php 

// Class
class parents {
    public $name = "Parent";

    public function cla( $a, $b ) {

        return $a + $b;

    }
}

// Inheritance
class child extends parents {

    public $name = "Child";

    public function cla( $a, $b ) {

        return $a - $b;

    }

}


// Object

$obj = new child();
echo $obj->cla( 10, 5 ) . "<br>";

$obj = new parents();
echo $obj->cla( 10, 5 ) . "<br>";
