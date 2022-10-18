<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up page design</title>
  <?php
  include 'css/style.php';
  include 'link/link.php'
  ?>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap link add html -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<?php

include 'dbcon.php';


if(isset($_POST['submit'])){
  $firstname =  $mysqli_real_escape_string($con, $_POST['firstname']);
  $lastname = $mysqli_real_escape_string($con, $_POST['lastname']);
  $email =  $mysqli_real_escape_string($con, $_POST['email']);
  $phone =  $mysqli_real_escape_string($con, $_POST['phone']);
  $password = $mysqli_real_escape_string($con, $_POST['password']);
  $re_password =  $mysqli_real_escape_string($con, $_POST['re_password']);

  $pass = password_hash($password, PASSWORD_BCRYPT);
  $re_pass = password_hash($re_password, PASSWORD_BCRYPT);

  $emailquery = "select * form registration where email='$email' ";
  $query = mysqli_query($con, $emailquery);
  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
    echo 'email alredy exisist';

  }else{
    if($password === $re_password){
      $insertquery = "INSERT INTO users( firstname, lastname, contuct, email, password, re_password) VALUES ('$firstname','$lastname','$phone','$email','$pass','$re_pass')";

      $iquery = mysqli_query($con, $insertquery);

      if($iquery){
        ?>
        <script>
            alert("insert successful");
        </script>
        <?php
      }else{
        ?>
        <script>
            alert("No insert");
        </script>
        <?php
    }

    }else{
      echo 'password not matching';
  }
  }

}
?>

  <div class="col-4 mx-auto">
    <h1 class="shakil">Sign Up</h1>
    <h6>Fill In The Input Box To The Correct Information</h6>
    <a class="btn btn-danger d-block my-3" href="#"><i class="fa-brands fa-google"></i> Continue with Google</a>
    <a class="btn btn-primary d-block" href="#"><i class="fa-brands fa-facebook-f"></i> Continue with facebook</a>
    <form action="" method="POST">
      <div class="input-group-prepant d-flex my-3">
        <span class="input-group-text"><i class="fa fa-user"></i></span>
        <input class="form-control" type="text" name="firstname" placeholder="First name" Required>
      </div>
      <div class="input-group-prepant d-flex my-3">
        <span class="input-group-text"><i class="fa fa-user"></i></span>
        <input class="form-control" type="text" name="lastname" placeholder="Last Name" required>
      </div>
      <div class="input-group-prepant d-flex my-3">
        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
        <input class="form-control" type="email" name="email" placeholder="Email">
      </div>
      <div class="input-group-prepant d-flex my-3">
        <span class="input-group-text"><i class="fa fa-phone"></i></span>
        <input class="form-control" type="number" name="phone" placeholder="Phone number">
      </div>
      <div class="input-group-prepant d-flex my-3">
        <span class="input-group-text"><i class="fa fa-lock"></i></span>
        <input class="form-control" type="password" name="password" placeholder="Password">
      </div>
      <div class="input-group-prepant d-flex my-3">
        <span class="input-group-text"><i class="fa fa-lock"></i></span>
        <input class="form-control" type="password" name="re_password" placeholder="Re-Password">
      </div>
      <submit class="btn btn-primary d-block my-3" type="submit" neme="submit" href="#">Submit Now</submit>
    </form>
    <p class="an_account">Alrady have an account? <a href="#">Sign in</a></p>
  </div>
</body>

</html>