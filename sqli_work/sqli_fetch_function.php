<?php 
/*
	mysqli_fetch_assoc();
	mysqli_fetch_array();
	mysqli_fetch_row();
	mysqli_fetch_all();
	mysqli_fetch_field();
	*/

	$conn 	= mysqli_connect("localhost", "root", "", "test") or die("Connection faild");
	$sql  	= "SELECT * FROM student";
	$result = mysqli_query($conn, $sql) or die("query faild");

	$row = mysqli_fetch_assoc($result);

	/*echo "<pre>";
	print_r($row);
	echo "</pre>";
*/

	echo $row['first_name']. " ". $row['last_name'];
  echo "<br>";
	

 ?>