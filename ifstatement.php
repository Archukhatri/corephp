<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>my first page on core php</title>
</head>

<body>

	<!--if statement-->
	<!--<?php
$d = date("D");
if($d == "Mon"){
    echo "Have a nice weekend!";
}
?>-->

	<!--if....else statement-->
<!--<?php
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
} else{
    echo "Have a nice day!";
}
?>
-->

<!--if else if statement-->
<?php
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
} elseif($d == "Mon"){
    echo "Have a nice Monday!";
} else{
    echo "Have a nice day!";
}
?>


</body>
</html>