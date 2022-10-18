<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'useraccount';

$con = mysqli_connect($server, $username, $password, $db);

if($con){
    ?>
    <script>
        alert("Connetion successful");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("No Connetion");
    </script>
    <?php
}
?>