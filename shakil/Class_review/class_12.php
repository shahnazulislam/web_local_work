<?php
    $productPrice = 1200;
    $productProfit = 10;

    for($i=1; $i<=100; $i++){
        echo 'person - '.$i.' Product Price '.$productPrice. ' ';
        $profit=($productPrice*$productProfit)/100;
        $sellingPrice=$productPrice+$profit;

        echo 'Selling price - '.$sellingPrice.'<br>';
        $productPrice=$sellingPrice;

    }
?>