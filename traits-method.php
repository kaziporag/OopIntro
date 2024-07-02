<?php 

trait common {
    public function show() {
        echo "This is from trait. \n";
    }
}

trait commonTwo {
    public function show() {
        echo "This is from trait two. \n";
    }
}

class parents {
    // public function show() {
    //     echo "This is from parent.";
    // }
    use common, commonTwo {
        common::show insteadof commonTwo;
        commonTwo::show as newshow;
    }
}

// class child extends parents{
//     use common;

//     public function show() {
//         echo "This is from child.";
//     }
// }

$show = new parents();
$show->show();
$show->newshow();