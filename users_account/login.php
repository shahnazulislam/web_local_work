<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login into php</title>
    <!-- fontawasome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <?php 
      $server_name ='localhost';
      $username = 'root';
      $password = '';
      $db_name = 'account';

      if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $con = mysqli_connect($username, $password);

        if (mysqli_connect) {
          $sql = "INSERT INTO users_id($username, $Password) VALUES('username','Password')";
        }else{
          ?>
          <script>
            alert('data not inserted');
          </script>
          <?php
        }


      }



     ?>
    <div class="col-4 mx-auto">
      <div class="row">
        <h3 class="text-primary">Add Account</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
          <div class="input-group-prepant d-flex my-3">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
            <input type="text/email" class="form-control" name="username" placeholder="username phone email" required>
          </div>
          <div class="input-group-prepant d-flex my-3">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="input your password" required>
          </div>
          <button type="button" name="submit" class="btn btn-primary d-flex">Sign in</button>
          <a class="text-decoration-none d-flex my-3">Forgotten Password?</a>
          <button class="btn btn-primary"><a href="index.php" class="text-light text-decoration-none">Create a new account</a></button>
        </form>
      </div>
    </div>
    
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>