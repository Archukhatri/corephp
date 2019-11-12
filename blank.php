<!--form using post method-->
<?php
if(isset($_POST['submit'])){
echo "yes it works";
echo "<br>";
$username=$_POST['username'];
$password=$_POST['password'];
echo "Hello: ".$username;
//echo $password;
?>
<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>my first page on core php</title>
</head>

<body>
  <form action="form.php" method="post">
        Name: <input type="text" name="name" placeholder="enter user name" >
         <br>
		E-mail: <input type="text" name="email"placeholder="enter your email address"> <br>
		Password: <input type="password" name="password" placeholder="enter your password"><br>
		Website: <input type="text" name="website"placeholder="enter the name of the webside that you made"><br>

		Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>

		Gender:
		<input type="radio" name="gender">Female
		<input type="radio" name="gender">Male
		<input type="radio" name="gender">Other
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>