<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body style="background-color:#0029">
<?php
include 'connection.php';

//this page is for sighup
session_start();

 if($_SERVER["REQUEST_METHOD"]=="POST"){
$name = $_POST["user"];
$pass = $_POST["pass"];
$email = $_POST["email"];

$query = "select *from user where username = '$name'";
$exec = mysqli_query($conn,$query);
$result = mysqli_num_rows($exec); // returns the number of the rows that contains the username = '$name'
 
if ($result == 1) {    //if row no is 1   
	echo "<script>
alert('USERNAME EXITS');
window.location.href='login.php';
</script>";
}
else //if username doesnt exist
{
	$query1 = "insert into user(username,password,email) values ('$name','$pass','$email')";
	$exec1 = mysqli_query($conn,$query1);
	echo "<script>
	alert('registred');
	window.location.href='login.php';
	</script>";
	
	
}
 }

?>

	
</body>
</html>
