<?php
include 'header.php';
include 'config.php';
include 'database.php';
?>

<?php
$db = new Database();
if (isset($_POST['submit'])) {
  $name    = mysqli_real_escape_string($db->link, $_POST['name']);
  $email   = mysqli_real_escape_string($db->link, $_POST['email']);
  $myskill = mysqli_real_escape_string($db->link, $_POST['skill']);
  if ($name == '' || $email == '' || $skill = '') {
?>
    <script>
      alert("feld must not be empty");
    </script>
<?php
  } else {
    $query  = "INSERT INTO tbl_user(name, email, skill) Values('$name', '$email', '$myskill')";
    $create = $db->insert($query);
  }
}
?>
<?php
if (isset($error)) {
  echo "<span style='color:red'>" . $error . "<span>";
}
?>
<div class="col-md-4 m-0 p-0 mx-auto border p-3">
  <div class="row">
    <form action="create.php" method="post">
      <div class="d-flex mt-3">
        <span class="input-group-text"><i class="fa fa-user"></i></span>
        <input class="form-control" type="text" name="name" placeholder="Please inter name">
      </div>
      <div class="d-flex mt-3">
        <span class="input-group-text"><i class="fa fa-user"></i></span>
        <input class="form-control" type="text" name="email" placeholder="Please inter email">
      </div>
      <div class="d-flex mt-3">
        <span class="input-group-text"><i class="fa fa-user"></i></span>
        <input class="form-control" type="text" name="skill" placeholder="Please inter skill">
      </div>
      <input class="btn btn-primary text-light btn-outline-dark mt-3 d-block form-control hover-dark" type="submit" name="submit" value="Submit">
      <input class="btn btn-dark btn-outline-primary text-light mt-3 d-block form-control hover-dark" type="reset" value="Reset">
    </form>
    <hr class="my-3"/>
    <a class="text-decoration-none" href="index.php">Go Back home</a>
  </div>
</div>