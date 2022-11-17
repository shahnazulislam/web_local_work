<?php 
$var = "false";

  // echo filter_var($var, FILTER_VALIDATE_INT);

/*  
 var_dump(filter_var($var, FILTER_VALIDATE_INT));
  if(filter_var($var, FILTER_VALIDATE_INT)) {
    echo "<br>$var is integer.";
  }else {
    echo "<br>$var is not an integer.";
  } 
*/

/* var_dump(filter_var($var, FILTER_VALIDATE_INT));
if(filter_var($var, FILTER_VALIDATE_INT) || filter_var($var, FILTER_VALIDATE_INT) == 0) {
  echo "<br>$var is integer.";
}else {
  echo "<br>$var is not an integer.";
}
*/


/* var_dump(filter_var($var, FILTER_VALIDATE_INT));

  $options = array(
    "options" => array(
      "min_range" => 20,
      "max_range" => 30
    )
    );

  if(filter_var($var, FILTER_VALIDATE_INT, $options)) {
    echo "<br>$var is integer.";
  }else {
    echo "<br>$var is not an integer.";
  } */

  var_dump(filter_var($var, FILTER_VALIDATE_FLOAT));

  $options = array(
    "options" => array(
      "min_range" => 20,
      "max_range" => 30
    )
    );

  if(filter_var($var, FILTER_VALIDATE_FLOAT, $options)) {
    echo "<br>$var is float.";
  }else {
    echo "<br>$var is not an float.";
  }

?>