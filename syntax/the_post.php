<?php
	echo $_POST['name'];
?>


<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>page using the get post</title>
</head>

<body>

	<form action="the_post.php" method="post">
		<input type="tex" name="name">
		<input type="submit">
	</form>
</body>
</html>