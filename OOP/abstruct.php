<?php
abstract class parentClass{
    public $name;

    abstract protected function calc($a, $b);
}

class childClass extends parentClass{
    public function calc($c, $d){
        echo "hello";
    }
}

$test = new childClass();

echo $test->calc(20, 30);
?>