<?php
$HOST_NAME  = "localhost";
$USERNAME   = "root";
$PASSWORD   = "";
$DB_NAME    = "test";

$conn = mysqli_connect($HOST_NAME, $USERNAME, $PASSWORD, $DB_NAME) or die("Database connection error");
?>