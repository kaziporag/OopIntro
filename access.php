<?php

// Public Access
class parents {

    public $name;

    public function __construct( $name ) {
        $this->name = $name;
    }

    public function display() {
        echo "Name: " . $this->name . "<br>";
    }

}

$display = new parents( "Porag Islam" );

$display->display();


// Protected Access
class parentsTwo {

    protected $name;

    public function __construct( $name ) {
        $this->name = $name;
    }

    protected function displaytwo() {
        echo "Name: " . $this->name . "<br>";
    }

}

class childtwo extends parentsTwo {

    public function displayex() {
        echo "Name: " . $this->name . "<br>";
    }

}

$display = new childtwo( "Porag Islam" );
$display->displayex();


// Private Access

class parentsThree {

    private $name;

    public function __construct( $name ) {
        $this->name = $name;
    }

    public function displaythree() {
        echo "Name: " . $this->name . "<br>";
    }

}

$display = new parentsThree("Porag Islam");
$display->displaythree();