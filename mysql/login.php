<?php
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];


	$connection=mysqli_connect('localhost','root', '','loginapp');
	if($connection)
	{
		echo "we are connected";
	}
	else
	{
		die("Database connection failed");
	}

}
?>

<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
		<title>my first page on core php</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">

			<div class="col-sm-6">
				<!--to make it responsive-->
				<form action="login.php" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text"name="username" class="form-control">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password"name="password" class="form-control">
					</div>

					<input class="btn btn-primary" type="submit" name="submit" value="submit">

				</form>
			</div>
		</div>

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	</body>
</html>