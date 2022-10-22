<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up page design</title>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap link add html -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'useraccount';

$con = mysqli_connect($server, $username, $password, $db);


if(isset($_POST['submit'])){
  $firstname =  $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email =  $_POST['email'];
  $phone =   $_POST['contuct'];
  $password = $_POST['password'];
  $re_password =   $_POST['re_password'];

  $hpassword = password_hash($password, PASSWORD_BCRYPT);
  $hre_password = password_hash($password, PASSWORD_BCRYPT);
 

  $emailquery = "select * form users where email='$email' ";
  $query = mysqli_query($con, $emailquery);
  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
    echo 'email alredy exisist';

  }else{
    if($password === $re_password){
      $insertquery = "INSERT INTO users(`firstname`, `lastname`, `contuct`, `email`, `password`, `re_password`) VALUES ('$firstname','$lastname', '$phone','$email','$hpassword','$hre_password')";

      $iquery = mysqli_query($con, $insertquery);
      echo $iquery;
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
        <input class="form-control" type="number" name="contuct" placeholder="Phone number">
      </div>
      <div class="input-group-prepant d-flex my-3">
        <span class="input-group-text"><i class="fa fa-lock"></i></span>
        <input class="form-control" type="password" name="password" placeholder="Password">
      </div>
      <div class="input-group-prepant d-flex my-3">
        <span class="input-group-text"><i class="fa fa-lock"></i></span>
        <input class="form-control" type="password" name="re_password" placeholder="Re-Password">
      </div>
      <input type="submit" name="submit" id="submit" class="button btn-primary form-control mb-2" value="Submit"/>
    </form>
    <p class="an_account">Alrady have an account? <a href="login.">Sign in</a></p>
  </div>


  <!--=============================
        script include here start 
    ==============================-->
  <!-- jquery script include here -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <!-- bootstrap min.js include -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--==============================
        script include end here
  ===============================-->
</body>

</html>