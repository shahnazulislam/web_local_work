<?php
//Overriding propertis in php oop

/* class base{
    public $name = "Parent Class";
}

class drived extends base{
    public $name = "Child class";
}

$test = new base();
// $test = new drived();
echo $test->name; */

class base{
    public $name = "Parent Class";
    public function calc($a, $b){
        return $a + $b;
}
}

class drived extends base{
    public $name = "Child class";
    public function calc($a, $b){
        return $a + $b;
    }
}

// $test = new base();
// echo $test->calc(10, 20);
$test = new drived();
echo $test->calc(30, 20);
?>