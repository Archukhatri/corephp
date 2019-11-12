<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<title>my first page on core php</title>
</head>

<body>
<?php
$list=[343,34,323,23,54,232,453];
echo max($list);
echo "<br>";
echo min($list);
echo "<br>";
echo sort($list);
echo "<br>";
print_r($list);
?>
</body>
</html>