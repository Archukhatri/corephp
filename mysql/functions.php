<?php	include "db.php";?>
<?php

function CreateForm(){
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];


	$connection=mysqli_connect('localhost', 'root', '','loginapp');
	// if($connection)
	// {
	// 	echo "we are connected";
	// }
	// else{
	// 	die("Database connection failed");
	// }
//to store the value of username and password in database
	$username =mysqli_real_escape_string($connection, $username);
	$password =mysqli_real_escape_string($connection, $password);

//to fixed the size and format of the password i.e to encrypt the password
	$hashFormat ="$2y$10$";
	$salt = "iusedsomecrazystrings22";
	$hashFormat_and_salt= $hashFormat . $salt;
	$password = crypt($password, $hashFormat_and_salt);


	$query="INSERT INTO users(username,password)";
	$query.="VALUES('$username', '$password')";

	$result = mysqli_query($connection, $query);

	if(!$result){
		die('Query Failed'. mysqli_error());
	}else {
		echo "Record is created";
	}
}


function readRows(){

	global $connection;

	$query="select * from users";
	

	$result = mysqli_query($connection, $query);

	if(!$result){
		die('Query Failed'. mysqli_error());
	}

	while($row = mysqli_fetch_assoc($result)){
		print_r($row);
	}
}



function showAllData(){

	global $connection;
	$query="select * FROM users";
	$result = mysqli_query($connection, $query);

	if(!$result){
		die('Query Failed'. mysqli_error());
	}

	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row['id'];

		echo "<option value='$id'>$id</option>";
	}

}

function UpdateTable()
{
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "UPDATE users SET ";
			$query .= "username = '$username', ";//concatinate from above query
			$query .= "password = '$password' ";
			$query .= "where id = $id ";
			$result = mysqli_query($connection, $query);

			if(!$result)
			{
				die("Query Failed" . mysqli_error($connection));
			}else {
				echo "Record is updated";
			}
		}


		function deleteRow()
		{

			if(isset($_POST['submit']))
			{
				/*The isset () function is used to check whether a variable is set or not. If a variable is already unset with unset() function, it will no longer be set. The isset() function return false if testing variable contains a NULL value.*/



				global $connection;
				$username = $_POST['username'];
				$password = $_POST['password'];
				$id = $_POST['id'];

				$query = "DELETE FROM users  ";
				$query .= "where id = $id ";
				$result = mysqli_query($connection, $query);

				if(!$result)
				{
					die("Query Failed" . mysqli_error($connection));
				}
				else {
					echo "Record is deleted";
				}
			}
		}

		?>