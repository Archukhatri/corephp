<?php
print_r($_GET);
?>





<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>page using the get method</title>
</head>

<body>

<?php
	$id=10;
    $button = "CLICK HERE NOW";
?>
<a href="get.php?id=<?php echo $id;?>"><?php echo $button;?></a>


	
</body>
</html>