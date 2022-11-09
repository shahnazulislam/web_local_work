<?php
// $emp =[
//   [1,"Shakil","PHP", 15000],
//   [2,"Sumon","Rubi", 18000],
//   [3,"Sujon","Python", 15000],
//   [4,"Pushpa","C++", 20000], 
// ];
// //use for loop to print $emp arrey
// for ($row = 0; $row < 4; $row++) { 
//     for ($col = 0; $col < 4; $col++) { 
//     echo $emp[$row][$col] . " ";
//     }
//     echo '<br/>';
// }

// //use foreach loop to print $emp arrey
// echo '<table border="1px" cellpadding ="5px" cellspacing="0px" height="100%" width="100%">';
// echo '<th style="color:white; background:black;">Id</th>';
// echo '<th style="color:white; background:black;">Name</th>';
// echo '<th style="color:white; background:black;">Skill</th>';
// echo '<th style="color:white; background:black;">Selarry</th>';
// foreach ($emp as $value1) {
//   echo '<tr>';
//   foreach ($value1 as $value2) {
//     echo "<td align='center'>". $value2 ."</td>" . " ";
//   }
//   echo '</tr>';
// }

// echo '</table>';

// echo "<pre>";
// print_r($emp);
// echo "</pre>";

//multidiamantional associative array....
// $marks=[
//     "Shakil"    => [
//         "Physics"   => 90,
//         "Camistry"  => 95,
//         "math"      => 75,
//     ],
//     "shaikat"   => [
//         "Physics"   => 90,
//         "Camistry"  => 95,
//         "math"      => 75,
//     ],
//     "sumon"     => [
//         "Physics"   => 90,
//         "Camistry"  => 95,
//         "math"      => 75,
//     ],
// ]
// foreach ($marks as $value1) {
//     foreach ($value1 as $value2) {
//     echo $value2;
//     }
//     echo '<br/>';
// }


//array for php
$colors = ["red", 20, "blue", 12.50];

/*echo $colors[0] ."<br>";
echo $colors[1] ."<br>";
echo $colors[2] ."<br>";
echo $colors[3];*/


/*echo "<pre>";
print_r($colors);
echo "</pre>";*/


/*echo "<ul>";
for ($i=0; $i < 4; $i++) { 
    echo "<li>".$colors[$i]."</li>";

}
echo "</ul>";*/

//this valu for echo foreach loop
// $age = array(
//     "bill" => 25,
//     "stave" => 27,
//     "elon" => 23,
// );
//test values

/*echo $age[ "bill" ] ."<br>";
echo $age["stave" ] ."<br>";
echo $age[ "elon" ] ."<br>";*/

/*echo "<ul>";
foreach ($age as $key => $value) {
  echo "<li>$key  =>  $value</li>";
}
echo "</ul>";*/


// multidiemantional array in php

/*$emp=[
  [1,"Shakil","PHP","Rangpur",20000],
  [2,"Shariful","PHP","Rangpur",20000],
  [3,"Sujon","PHP","Rangpur",20000],
  [4,"Sumon","PHP","Rangpur",20000],
  [5,"Saikat","PHP","Rangpur",20000],
];
echo "<table height='100%' width='100%' border='2px' cellpadding='5' cellspacing='0'>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Skill</th>";
echo "<th>City</th>";
echo "<th>Selary</th>";
foreach ($emp as $value) {
  echo "<tr>";
  foreach ($value as $values) {
    echo "<td align='center'>$values</td>" ." ";
  }
  echo "</tr>";
}
echo "</table>";*/

/* 

$Marks = [
  "Shakil" => [
    "Physic"  =>  76,
    "Chamistry"  =>  68,
    "Math"  =>  78,
  ],
  "Sumon" => [
    "Physic"  =>  76,
    "Chamistry"  =>  68,
    "Math"  =>  78,
  ],
  "Saikat" => [
    "Physic"  =>  76,
    "Chamistry" =>  68,
    "Math"   =>  78,
  ]
]; */
// array print function
/*echo "<pre>";
print_r ($Marks);
echo "</pre>";*/

/* echo "<table cellpadding='5' cellspacing='0' border='5px'>";
echo "<th>Student Name</th>";
echo "<th>Physic Marks</th>";
echo "<th>Chamistry Marks</th>";
echo "<th>Math Marks</th>";
foreach ($Marks as $key => $value) {
  echo "<tr>";
  echo "<td>$key</td>";
  foreach ($value as $valu2) {
    echo "<td>$valu2</td>";
  }
  echo "</tr>";
}
  echo "</table>";*/


  
 
// php end here
?>

<?php 
//array pop and push

  /*$frute = ["orange","banana","grapes"];*/


 /* array_push($frute, "banana",);
  echo '<pre>';
  print_r($frute);
  echo '</pre>';  */

/*  array_pop($frute);

  echo '<pre>';
  print_r($frute);
  echo '</pre>';
*/

 ?> 

<?php 
  //array shift and array unshift
/* $frute = ["orange","banana","grapes"];
  array_shift($frute);

  echo '<pre>';
  print_r($frute);
  echo '</pre>';  */
?>

<?php 
 /* 
  $frute = ["orange","banana"];
  $veg = ["carrot","paw"];
  //$newArray = array_merge($frute, $veg);
  $newArray = array_combine($frute, $veg);//variable er value same hote hobe ta na hole error ashbe


  echo '<pre>';
  print_r($newArray);
  echo '</pre>';*/
 ?>

 <?php 
  //php array_slice
/*
  $color = ["red","blue","green","pink"];

  $newArray = array_slice($color, 1,2);

  echo '<pre>';
  print_r($newArray);
  echo '</pre>';*/
 ?>