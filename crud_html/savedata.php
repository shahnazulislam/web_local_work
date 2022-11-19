<?php
echo $sName = $_POST['sname'];
echo $sClass = $_POST['class'];
echo $sAddress = $_POST['saddress'];
echo $sPhone = $_POST['sphone'];

/* $conn = mysqli_connect("localhost", "root", "", "crud") or die("Cunnection field");
$sql = "INSERT INTO students WHERE(sname, class, saddress, sphone) VALUES('[$sName]', '[$sClass]', '[$sAddress]', '[$sPhone]')";
$result = mysqli_query($conn, $sql);

header("Location: http://localhost/web_local_work/crud_html/index.php");


mysqli_close($conn); */
?>