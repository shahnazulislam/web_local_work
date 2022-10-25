<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>

    <?php
        include 'config.php';
        include 'database.php';
    ?>


    <?php
        $db = new Database();
        if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($db->link, $_POST['name']);
            $email = mysqli_real_escape_string($db->link, $_POST['email']);
            $skill = mysqli_real_escape_string($db->link, $_POST['skill']);
            if($name == '' || $email == '' || $skill = ''){
                $error = "field must not be empty !!";
            }else{
                $query = "INSERT INTO tbl_user(name , email, skill) Values('$name', '$email', '$skill')";
                $create = $db->insert($query);
            }
        }
    ?>
    <?php
		if(isset($error)){
			echo "<span style='color:red'>".$error."<span>";
		}
	?>

    <form action="create.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" placeholder="Please inter name"></td>
            </tr>
            <tr>
                <td>Gmail</td>
                <td><input type="text" name="email" placeholder="Please inter email"></td>
            </tr>
            <tr>
                <td>Skill</td>
                <td><input type="text" name="skill" placeholder="Please inter skill"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="submit">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
    <a class="text-decoration-none" href="index.php">Go Back</a>
    s
</body>
</html>