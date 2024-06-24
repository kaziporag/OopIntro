<?php 

// Interface
interface interfaceOne {

    // Method
    public function add( $a, $b);
}

// Interface
interface interfaceTwo {

    // Method
    public function sub( $c , $d );

}

// Class
class interfaces implements interfaceOne, interfaceTwo {
    
    // Method
    public function add( $a, $b) {

        return $a + $b;
    }

    // Method
    public function sub( $c , $d ) {
        return $c - $d;
    }

}

// Object
$int = new interfaces();

// Print
echo $int->add(1,2) . "<br>";
echo $int->sub(5,3) . "<br>";