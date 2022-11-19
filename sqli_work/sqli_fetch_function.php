<?php 
/*
mysqli_fetch_assoc();
mysqli_fetch_array();
mysqli_fetch_row();
mysqli_fetch_all();
mysqli_fetch_field();
*/

/* $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection faild");
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("query faild"); */

// $row = mysqli_fetch_assoc($result);

/* echo "<pre>";
print_r($row);
echo "</pre>"; */

/* echo $row['id']." ".$row['first_name']. " ". $row['last_name'];
echo "<br>"; */


/* while ($row = mysqli_fetch_assoc($result)) {
	echo $row['first_name']. " ". $row['last_name'] . "<br>";
} */

/* $row = mysqli_fetch_row($result);
echo $row[1]." ". $row[2];
 */

/*  while($row = mysqli_fetch_row($result)){
	echo $row[1]." ". $row[2] . "<br>";
 } */


/*  $row = mysqli_fetch_field($result);
 echo "<pre>";
print_r ($row);
echo "</pre>"; */

/* foreach($row as $data){
	echo $data['id']. " ".$data['first_name']. " ".$data['last_name']. "<br>";
} */

/* while($field = mysqli_fetch_field($result)){
echo "<pre>";
print_r ($field);
echo "</pre>";
} */

/* while($field = mysqli_fetch_field($result)){
	echo $field->name . " ".$field->max_length. "<br>";
} */


//mysqli effected rows
/* 
$conn = mysqli_connect("localhost", "root", "","test") or die("connection faild");

$sql = "DELETE FROM student WHERE id > 3";

$result = mysqli_query($conn, $sql) or die("query faild");
echo "total rows :" . mysqli_affected_rows($conn);

*/

$conn = mysqli_connect("localhost", "root", "", "test") or die("connection faild :". mysqli_connect_errno());

$sql = "SELECT * FROMs student";
$result = mysqli_query($conn, $sql);

print_r(mysqli_error_list($conn));

 die();

$str = "";

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo $row['first_name'].$row['last_name']. "<br>";
	}
}

?>
