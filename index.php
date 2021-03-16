<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<title>Users Information</title>
	</head>
	<body>
		<?php require_once 'process.php'; ?>
		<?php 
			$mysqli = new mysqli("localhost", "root", "", "iser_infotrmation") or die(mysqli_error($mysqli));
			$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
			// pre_r($result);
		?>

			<div class="row justify-content-center">
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Phone</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<?php 
					while($row = $result->fetch_assoc()):
					?>
					<tr>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['phone_numb'] ?></td>
					</tr>
				<?php endwhile; ?>
				</table>
			</div>

			<?php

			function pre_r($array){
				echo "<pre>";
				print_r($array);
				echo "</pre>";
			}
			?>

			
		<div class="row justify-content-center">
			<form action="process.php" method="POST">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="Name">
				</div>
				<div class="form-group">
					<label>Phone Number</label>
					<input type="text" name="phone_numb" class="form-control" value="Phone Number">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary" name="save">Save</button>
				</div>
			</form>
		</div>

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>