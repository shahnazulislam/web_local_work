<?php
/* echo $sName = $_POST['sname'];
echo $sClass = $_POST['class'];
echo $sAddress = $_POST['saddress'];
echo $sPhone = $_POST['sphone'];

$conn = mysqli_connect("localhost", "root", "", "crud") or die("Cunnection field");
$sql = "INSERT INTO students (sname, sclass, saddress, sphone) VALUES('$sName', '$sClass', '$sAddress', '$sPhone')";
$result = mysqli_query($conn, $sql) or die ("query not found");

header("Location: http://localhost/web_local_work/crud_html/index.php");


mysqli_close($conn); */

// use LDAP\Result;

?>


<?php
$serverName = "localhost";
$userName = "root";
$Password = "";
$dbname = "crud";

?>

<?php

$stu_name = $_POST['sname'];
$stu_class = $_POST['class'];
$stu_address = $_POST['saddress'];
$stu_phone = $_POST['sphone'];

?>

<?php

$conn =new mysqli($serverName, $userName, $Password, $dbname);
$sql = "INSERT INTO students (sname,sclass,saddress,sphone) VALUES('$stu_name','$stu_class','$stu_address','$stu_phone')";
$result = mysqli_query($conn, $sql) or die ("<h1 style='color:green'>Query not found</h1>");

header("Location: http://localhost/web_local_work/crud_html/index.php");


// echo "<a href= 'index.php'>GO HOME</a>";

mysqli_close($conn)
?>

