<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>my first page on core php</title>
</head>

<body>

<?php
$x= "outside";//global varaible
function convert(){
	global $x;
	$x="inside"; //local variable
}
echo $x;
echo "<br>";
convert();
echo $x;

?>


</body>
</html>