<?php

//this page is for the login

include 'connection.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST["user"];
$pass = $_POST["pass"];

$query = "select *from user where username = '$name' && password ='$pass'";
$exc = mysqli_query($conn,$query);
$res = mysqli_num_rows($exc);

if($res == 1) 
{
	header('location:admin.php');
}
else
{	
	echo "<script>
	alert('incorrect user name or password')
	window.location.href='login.php'
	</script>";
	
}
}

?>

