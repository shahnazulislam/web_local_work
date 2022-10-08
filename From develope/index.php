<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>this is the lest text lesson</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div>
    <?php

    if(isset($_POST['create'])){
      $firstname    = $_POST['firstname'];
      $lastname     = $_POST['lastname'];
      $email        = $_POST['email'];
      $contuct      = $_POST['contuct'];
      $password     = $_POST['password'];

      echo $firstname . " " . $lastname . " " . $email . " " . $contuct . " " . $password;
    }

    ?>
  </div>
  <div class="row">
    <div class="col-3 mx-auto">
      <form class="Custom_size" action="index.php" method="post">
        <label for="firstname">First Name:</label>
        <input class="form-control" name="firstname" type="text" placeholder="Type your name">
        <label for="lastname">Last Name:</label>
        <input class="form-control" name="lastname" type="text" placeholder="Type your name">
        <label for="email">Email address:</label>
        <input class="form-control" name="email" type="email" placeholder="Type your email">
        <label for="contuct">Contuct:</label>
        <input class="form-control" name="contuct" type="contuct"  placeholder="Type your contact">
        <label for="password">Password:</label>
        <input class="form-control" name="password" type="password" placeholder="Type your password">
        <button class="btn btn-primary mt-3" name="create">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>