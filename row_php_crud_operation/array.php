<?php
$emp =[
   [1,"Shakil","PHP", 15000],
   [2,"Sumon","Rubi", 18000],
   [3,"Sujon","Python", 15000],
   [4,"Pushpa","C++", 20000],
];

// for ($row = 0; $row < 4; $row++) { 
//     for ($col = 0; $col < 4; $col++) { 
//     echo $emp[$row][$col] . " ";
//     }
//     echo '<br/>';
// }

echo '<table border="1px" cellpadding ="5px" cellspacing="0px" height="100%" width="100%">';
echo '<th style="color:white; background:black;">Id</th>';
echo '<th style="color:white; background:black;">Name</th>';
echo '<th style="color:white; background:black;">Skill</th>';
echo '<th style="color:white; background:black;">Selarry</th>';
foreach ($emp as $value1) {
    echo '<tr>';
    foreach ($value1 as $value2) {
        echo "<td align='center'>". $value2 ."</td>" . " ";
    }
    echo '</tr>';
}

echo '</table>';

// echo "<pre>";
// print_r($emp);
// echo "</pre>";
