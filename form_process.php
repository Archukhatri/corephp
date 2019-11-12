<!--form using post method-->
<?php
if(isset($_POST['submit'])){
//echo "yes it works";
//echo "<br>";
	$name=array("Archu","Student","Peter","Samid","Mohad","Maria","Jane","Tom");
$minimum = 5;
$maximum=10;


$username=$_POST['username'];
$password=$_POST['password'];
echo "Hello: ".$username;
echo "<br>";
//echo $password;


//starts validation from here
if (strlen($username)<$minimum){
echo "username has to be longer then five";
 }
echo "<br>";
 if (strlen($username)>$maximum){
echo "username cannot to be longer then ten";
echo"<br>";
 }
if (!in_array($username,$name)){
echo "sorry you are not allowed";
}
else{
	echo "welcome";
}


}

?>