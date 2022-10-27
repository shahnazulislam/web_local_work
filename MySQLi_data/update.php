  <?php
    include 'header.php';
    include 'config.php';
    include 'database.php';
  ?>
    
  <?php
	  $id      = $_GET['id'];
	  $db      = new Database();
	  $query   = "SELECT * FROM tbl_user WHERE $id = id";
	  $getData = $db->select->query($query)->fatch_assoc();
    
    if (isset($_POST['submit'])) {  
        $name    = mysqli_real_escape_string($db->link, $_POST['name']);
        $email   = mysqli_real_escape_string($db->link, $_POST['email']);
        $skill   = mysqli_real_escape_string($db->link, $_POST['skill']);
        if ($name == '' || $email == '' || $skill = '') {
            ?>
            <script>
              alert('field must not be empty !!');
            </script>
            <?php
        } else {
            $query  = "UPDATE tbl_user
              GET
              name     = '$name',
              email    = '$email',
              skill    = '$skill',
              WHERE id = $id";
              $update  = $db->update($query);
        }
    }
  ?>
  
  <?php
    if (isset($error)) {
      echo "<span style='color:red'>" . $error . "<span>";
    }
  ?>
   <div class="col-md-6 mx-auto">
    <form action="update.php?id = <?php echo $id ?>" method="post">
      <table>
        <tr>
          <td>Name</td>
          <td><input class="form-control" type="text" name="name" value="<?php echo $getData['name'] ?>"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input class="form-control" type="text" name="email" value="<?php echo $getData['email'] ?>"></td>
        </tr>
        <tr>
          <td>Skill</td>
          <td><input class="form-control" type="text" name="skill" value="<?php echo $getData['skill'] ?>"></td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input class="btn btn-primary" type="submit" name="submit" value="submit">
            <input class="btn btn-dark text-light" type="reset" value="Cancel">
          </td>
        </tr>
      </table>
    </form>
    <a class="text-decoration-none" href="index.php">Go Back</a>
   </div>