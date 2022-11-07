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

for ($a=1; $a <= 10; $a++) { 
  if ($a == 3) {
    echo "shakil <br>";
    break;
  }
  echo $a . "<br>";
}

?>