<?php
//access modifire in php oop
class base{
    public $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your name: ". $this->name;
    }
}
$s1 = new base("Shakil Khan");
$s1->name = "Khan Md";
$s1->show();

?>
