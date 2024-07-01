<?php 

class parentClass {
    protected static $name = "Kazi";

    public function show() {
        echo "My name is " . static::$name . "<br/>";

        echo "My name is " . self::$name . "<br/>";
    }
}

class childClass extends parentClass {
    protected static $name = "Maliyat";

}

$show = new childClass();

$show->show();