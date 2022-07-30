
<?php
	include"function.php"


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="row mt-5">
		<div class="col-md-6 offset-md-3">
			<?php
				if (isset($_POST)) {
					insert();
				}


			?>
			<form method="POST">
			<div class="form-group mt-5">
				<label for="">User Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter Your Name">
			</div>
			<div class="form-group">
				<label for="">User Email Address</label>
				<input type="Email" name="email" class="form-control" placeholder="Enter Your Email">
			</div>
			<div class="form-group">
				<label for="">Status</label>
				<select name="status" class="form-control">
					<option value="1">-----Status-----</option>
					<option value="1">Active</option>
					<option value="2">Deactive</option>
				</select>
			</div>
			<button name="save" class="mt-3 btn btn-info form-control">save</button>
		</div></form>
	</div>

</body>
</html>