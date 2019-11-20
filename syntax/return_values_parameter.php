<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>my first page on core php</title>
</head>

<body>

<?php
   function addNumbers($number1,$number2  ){

$sum= $number1+$number2;
return $sum; 
   }
   $result=addNumbers(56,76);
     echo $result;

     echo "<br>";

$result=addNumbers(1000,$result);
   echo $result;

    echo "<br>";
    $result=addNumbers(10000,$result);
    echo $result;
   ?>


</body>
</html>