<?php

class staticMembers {
    public static $name = "Kazi";

    public static function show() {
        echo "My name is " . self::$name . "<br/>";
    }

    public function __construct($name) {
        self::$name = $name;
    }

}

$show = new staticMembers('Maliyat');

$show->show();

echo "My name is " . staticMembers::$name . "<br/>";

staticMembers::show();