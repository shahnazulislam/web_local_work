
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
			echo "<span style='color:red'>".$_GET['msg']."<span>";
		}
		?>
			
		<!-- <div class="col-md-6 mx-auto">
			<div class="row"> -->
			<table border="1">
			<tr>
				<th width="25%">Name</th>
				<th width="25%">Email</th>
				<th width="25%">Skill</th>
				<th width="25%">Action</th>
			</tr>
			<?php if($read) { ?>
			<?php while($row = $read->fetch_assoc()) {?>
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['skill']; ?></td>
				<td><a href="update.php?id=<?php echo $row['id']; ?>">edit</a></td> 
			</tr>
			<?php } ?>
			<?php }  else { ?>
				<h1>data is not avilable</h1>
			<?php }?>
		</table>
			<!-- </div>
		</div> -->
		<a href="create.php">Go create</a>
		

</html>