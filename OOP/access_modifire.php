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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>