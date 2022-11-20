<?php
$serverName = "localhost";
$userName = "root";
$Password = "";
$dbname = "crud";

?>

<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_class = $_POST['sclass'];
$stu_address = $_POST['saddress'];
$stu_phone = $_POST['sphone'];

?>

<?php

$conn =new mysqli($serverName, $userName, $Password, $dbname);
$sql = "UPDATE students  SET sname = '$stu_name', sclass = '$stu_class', saddress = '$stu_address', sphone = '$stu_phone' WHERE sid = '$stu_id '";
$result = mysqli_query($conn, $sql) or die ("<h1 style='color:green'>Query not found</h1>");

header("Location: http://localhost/web_local_work/crud_html/index.php");


// echo "<a href= 'index.php'>GO HOME</a>";

mysqli_close($conn)
?>