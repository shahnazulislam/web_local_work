<!-- 1 -->
<?php
//phpinfo();
?>
<!-- 2 -->
<?php
/* echo "Tomorrow I 'll learn PHP global variables. "."\n";
echo "This is a bad command : del c:\*.* ''\n" */
?>
<!-- 3 -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* $var = "php tutorial";
        echo "<h3> $var</h3>"; */
    ?>
    
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
</body>
</html> -->
<!-- 4 -->
<!-- problem -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Please input your name:</h2>
    <form method="POST">
        <input type="text" name="name">
        <input type="submit" value="Submit name" >
    </form>
    <?php
       /*  $name = $_POST['name'];
        echo "Hello $name"; */
    ?>
</body>
</html> -->
<!-- 5 -->
<?php
/* if (!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip_address = $_SERVER["HTTP_CLIENT_IP"];
}elseif (!empty($_SERVER["HTTP_X_FORWARDED"])) {
    $ip_address = $_SERVER["HTTP_X_FORWARDED"];
}else{
    $ip_address = $_SERVER["REMOTE_ADDR"];
}
echo $ip_address; */
?>
<!-- 6 -->
<?php
/* echo "your using browser is :" .$_SERVER['HTTP_USER_AGENT'] */
?>
<!-- 7 -->
<?php
/* $php_file_name = basename($_SERVER["PHP_SELF"]);
echo $php_file_name; */
?>

<!-- 8 -->
<?php
/* $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url = parse_url($url);
echo "Scheme: ".$url['scheme']. "\n"."<br>";
echo "host: ".$url['host']. "\n"."<br>";
echo "path: ".$url['path']. "\n"; */
?>
<!-- 9 -->
<!-- first letter color -->
<?php
/* $text = "PHP tutorial";
$text = preg_replace('/(\b[a-z])/i', '<span style="color: yellow;">\1</span>', $text);
echo $text; */
?>

<!-- 10 -->

<?php
/* if(!empty($_SERVER['HTTPS'])){ 
    echo "This is https server";
}else{
    echo "this is http server";
} */
?>
<!-- 11 -->
<?php
/* header('location: https://www.w3resource.com/') */
?>

<!-- 12 -->
<?php
/* $email = "shakil@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is valid email";
}else {
    echo "$email is invalid email";
} */
?>
<!-- 13 -->
<?php
/* echo "<table border='1' cellpadding='0' cellspacing='0'>
<tr>
<td style='color: blue;'>shahnazul</td>
<td>$500</td>
</tr>
<tr>
<td style='color: blue;'>shahnazul</td>
<td>$500</td>
</tr>
</table>"; */
?>

<?php
$all_lines = file('https://www.w3resource.com/')
foreach ($all_lines as $line_num => $line) {
   echo "line no. -$line_num:". htmlspecialchars($line). "\n";
}
?>



