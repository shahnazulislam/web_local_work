<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>This is opp php first project</title>
		<link src="stylesheet" href="images/shakil.jpg">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
	</head>
	<body>
		<?php
			include 'style.php';
			include 'config.php';
			include 'database.php';
		?>
		<?php
			$db = new Database();
			$query = "SELECT * FROM tbl_user";
			$read = $db->select($query);
		?>

		<!--header section start-->
		<div class="navbar navbar-nav navbar-expand-md navbar-primary bg-primary">
			<div class="nav ">
				<div class="navbar-brand">
					<h1 class="text-light">THIS IS OOP IN PHP</h1>
				</div>
			</div>
		</div>
		<!--header section end-->	
		<div class="col-md-6 mx-auto">
			<div class="row">
			<table cellpadding="1" cellspacing="1" border="1">
			<tr>
				<th width="25%">Name</th>
				<th width="25%">Email</th>
				<th width="25%">Skill</th>
				<th width="25%">Action</th>
			</tr>
			<?php if($read) { ?>
			<?php while($row = $read->fetch_assoc()) {?>
			<tr>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><?php echo $row['skill'] ?></td>
				<td><a href="update.php?id=1">edit</a></td>
			</tr>
			<?php } ?>
			<?php } else { ?>
				<h1>data is not avilable</h1>
			<?php }?>
		</table>
			</div>
		</div>
		<!-- java script link -->
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>

</html>