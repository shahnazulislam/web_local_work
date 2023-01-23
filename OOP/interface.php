<?php
//interface in php oop

use childClass as GlobalChildClass;

interface parent1{
    function calc($a, $b);
}

interface parent2{
    function calc($c, $d);
}

class childClass implements parent1, parent2{
    public function calc($a, $b){
        echo $a + $b;
    }
    public function sub($c, $d){
        echo $c - $d;
    }
}

$test = new childClass();
$test->calc(20, 35);

echo "<br>";

$test->sub(35, 20);

?>