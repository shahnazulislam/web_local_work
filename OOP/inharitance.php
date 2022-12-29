<?php
//inharitance in php oop 

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;

    }

    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: ". $this->name . "<br>";
        echo "Employee Age: ". $this->age . "<br>";
        echo "Employee Salary: ". $this->salary;
    }
}
class maneger extends employee{
    public $ta = 1000;
    public $phone= 300;
    public $totalsalary;

    function info()
    {
        $this->totalsalary = $this->salary + $this->ta +$this->phone;

        echo "<h3>manager Profile</h3>";
        echo "Employee Name: ". $this->name . "<br>";
        echo "Employee Age: ". $this->age . "<br>";
        echo "Employee Salary: ". $this->totalsalary;
    }
}
$e1 = new employee("Ram", 25, 20000);
$m2 = new maneger("kishor", 44, 20000);


$m2->info();

$e1->info();
?>