<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>my first page on core php</title>
</head>

<body>
  <?php
  function init(){
  	  calculate();
  	  echo "<br>";
  	  say_Something();
  }

  function calculate(){
  	echo 345+343;
  }

function say_Something(){
  	echo "hello clients, do you like the project";
  }
  init();
  ?>



</body>
</html>