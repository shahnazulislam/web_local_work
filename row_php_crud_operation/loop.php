<?php
//while loop statment

/*$a = 1;
while ($a <= 10) {
  echo "shakil is a php trainer. <br>";
  $a = $a+1;
}*/


/*$a = 1;
while ($a <= 10) {
  echo $a . ") Shakil is a php developer<br>";
  $a++;//incriment value
}*/

/*$a = 10;
while ($a >= 1) {
  echo "Insert into this:" . $a ."<br>";
  $a--;
}*/


/*echo "<ul>";
$a = 1;
while ($a <= 10) {
  echo "<li>";
  echo "Input your number: " . $a .",". "<br>";
  echo "</li>";
  $a = $a + 1;
}
echo "</ul>";*/


//Do While loop
/*$a = 1;

do{
  echo $a .") insert into a number. <br>";
  $a = $a + 2;
}while ($a <= 10)*/


/*
$a = 1;
do{
  echo "shakil you can recive your books in sundorbon kureer serves: ". $a ."<br>";
   $a = $a + 2;
}while ($a <= 10)*/

//for loop

/*for ($i=1; $i <= 10; $i=$i+2) { 
  echo $i.") Your books near by you. <br>";
}*/

//nested loop
/*echo "<table cellpadding='5' cellspacing='0' border='1px'>";
echo "<tr>";
for ($a = 1; $a <= 100; $a = $a + 10) { 
  for ($b = $a; $b < $a + 10; $b++) { 
    echo "<td>$b</td>";
  }
  echo "</tr>";
}
echo "</table>";*/

//brack and continue
/*for ($a=1; $a <= 10; $a++) { 
  if ($a == 3) {
    echo "shakil <br>";
    continue;
  }
  echo $a . "<br>";
}*/

/*for ($a=1; $a <= 10; $a++) { 
  if ($a == 3) {
    echo "shakil <br>";
    break;
  }
  echo $a . "<br>";
}*/

/*echo "Hello Shakil How Are You? <br>";
echo "Hello Shakil How Are You? <br>";
goto php;
echo "Hello Shakil How Are You? <br>";
echo "Hello Shakil How Are You? <br>";
echo "Hello Shakil How Are You? <br>";
php:
echo "Block all echo code in this statment. <br>";*/


//php function
/*function hello(){
  echo "hello everybody <br>";
}

hello();
hello();
hello();
hello();
hello();*/

//function with parameters

/*function hello($fname="First",$lname="Last")//pass difault value first and last
{
  echo "hello $fname $lname.<br>";
}

hello();
hello("Shahnazul", "Islam");*/

/*function work($firstname, $lastname){
  echo "Hello $firstname, $lastname <br>";
}

function sum($a, $b){
  echo $a + $b ."<br>";
}

$one=10;
$two=20;

sum($one, $two)*/


//function with returning value

function sum($math, $eng, $sc){
  $s = $math + $eng + $sc;

  return $s;
}
function percentage($st){
  $per = $st /3;

  echo $per ."%";
}

$total = sum(55,65,88);

percentage($total);

/*echo $total;*/






?>

