<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "project";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect($host,$username,$password);
$db = mysqli_select_db($conn,$database);
if($db && $conn)
{
	//echo "connected to database";
}
else{
	echo "not ";
}