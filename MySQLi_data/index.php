<?php
    include 'header.php';
    include 'config.php';
    include 'database.php';
?>
<?php
    $db = new Database();
    $query = "SELECT * FROM tbl_user";
    $read = $db->select($query);
?>
<?php
    if(isset($_GET['msg'])){
    echo "<span style='color:green'>".$_GET['msg']."<span>";
    }
?>
<table class="border mx-auto">
  <tr class="text-center">
    <th width="25%">Name</th>
    <th width="25%">Email</th>
    <th width="25%">Skill</th>
    <th width="25%">Action</th>
  </tr>
  <?php if($read) { ?>
  <?php while($row = $read->fetch_assoc()) {?>
  <tr class="text-center">
    <td class="border "><?php echo $row['name']; ?></td>
    <td class="border"><?php echo $row['email']; ?></td>
    <td class="border"><?php echo $row['skill']; ?></td>
    <td class="border"><a href="update.php?id=<?php echo urlencode($row['id']); ?>">Edit</a></td>
  </tr>
  <?php } ?>
  <?php }  else { ?>
  <h1>data is not avilable</h1>
  <?php } ?>
</table>
<a href="create.php" class="btn btn-outline-primary">Go create</a>
