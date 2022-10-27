<?php
    // $x = 10;
    // $y = 17;

    //  $z = 34%2;

    // echo $z;
    // exit;

    for($i = 1; $i < 11; $i++){
        $value = rand(100,100000);

        $z = $value % 2;

        if($z == 0){
            echo $value . " -> Event Number <br>";
        }else{
            echo $value . " -> Odd Number <br>";
        }
    }
?>