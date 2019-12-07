<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="pretty-checkbox/dist/pretty-checkbox.css">
	


	<title>Ticket</title>
	<!-- <script>
		function checkbox(result) // this is to change the background color of the checked box
		{
			if(result.checked){
				result.parentNode.style.backgroundColor = "#fc2403";
				result.parentNode.style.Color = "White";

			}
			else{
				result.parentNode.style.backgroundColor = "";
				result.parentNode.style.Color = "";

			}
		}
	</script> -->
	<style>
		 body{
      background-image: url("img/img6.jpg");
      background-size: cover;
      background-repeat: no-repeat;
	  color: white;
		}
		table{
			background-color:#0029 ;			
		}
		input[type="checkbox"] {
  		background-color:#0029 ;
  		color: white;
}

h1{
	color:Black;
	font-size:50px;
}
	
	</style>
	
</head>
<body>
	<h1>Select your ticket</h1>

<?php
include('connection.php');
echo "<center>";
$date1 = $_POST["date1"];
$source = $_POST["source"];
$dest = $_POST["dest"];

$q1 = mysqli_query($conn,"select r_id from route where source = '$source' and dest = '$dest';");
$ex1 = mysqli_fetch_array($q1);
$num = mysqli_num_rows($q1);
if($num == 1){
	//print("there is a route");
	
	//echo "bus route";
	//echo $ex1['r_id'];
	$route = $ex1['r_id'];
	

	//echo "travelling date";
	//echo $date1;
}
else{ // alert if there is no route
	echo "<script>
	alert('no routes')
	window.location.href='home.php'
	</script>";
}
// SELECT s_id from seat WHERE s_id NOT IN (SELECT s_id from reserve and date='$date1');
// SELECT s_id from seat WHERE s_id NOT IN (SELECT s_id from reserve WHERE date='2019-10-31')
// SELECT s_id,'green' color from seat WHERE s_id NOT IN (SELECT s_id from reserve WHERE date='2019-10-31') UNION SELECT s_id,'red' FROM reserve WHERE  date='2019-10-31'



$q3 = mysqli_query($conn," SELECT s_id,'green' color from seat WHERE s_id NOT IN (SELECT s_id from reserve WHERE date='$date1' and r_id='$route') UNION SELECT s_id,'red' FROM reserve WHERE  date='$date1' and r_id='$route' order by s_id asc"); //this will display which seats are vacant
//$ex3 = mysqli_fetch_array($q3);
$num3 = mysqli_num_rows($q3);

//print($num3);
echo "<p>Towards Driver</p>";
$dyn = '<table border="1" cellpadding ="25">';
$i = 0;
echo "<form method='post' action='details.php' required>";
while($row = mysqli_fetch_array($q3))
{	
	$id = $row['s_id'];
	if($i%3==0){
	if($row['color']=='green'){
	$dyn .='<tr><td><div class="pretty p-default p-curve p-fill"><input type="checkbox" value='.$id.' onclick="checkbox(this)" name="seat[]"><div class="state p-primary p-bigger"><label>'.$id.'</label></div></div></td>';
	$dyn .='<td><p></p></td>';

	}
	else{
		$dyn .='<tr><td><div class="pretty p-default p-curve p-fill dis"><input type="checkbox" value='.$id.' onclick="checkbox(this)" name="seat[]" disabled><div class="state p-primary p-bigger"><label>'.$id.'</label></div></div></td>';
		$dyn .='<td><p></p></td>';
	}
	}
	else{
		if($row['color']=='green'){
		$dyn .='<td><div class="pretty p-default p-curve p-fill"><input type="checkbox" value='.$id.' onclick="checkbox(this)" name="seat[]"><div class="state p-primary p-bigger"><label>'.$id.'</label></div></div></td>>';
		}
		else{
			$dyn .='<td><div class="pretty p-default p-curve p-fill dis"><input type="checkbox" value='.$id.' onclick="checkbox(this)" name="seat[]" disabled><div class="state p-primary p-bigger"><label>'.$id.'</label></div></div></td>';
		}
	}
	$i++;
	
}
$dyn .= '</tr></table>';
echo $dyn;
echo "<br>";


echo '<input type="hidden", name = "rot" value='.$route.'>';
echo '<input type="hidden", name = "day" value='.$date1.'>';
echo '<input type="hidden", name = "source" value='.$source.'>';
echo '<input type="hidden", name = "dest" value='.$dest.'>';
echo "<h5>click submit if you are sure about booking </h5>";
echo "<input type= 'submit' class='btn btn-primary' value='submit' name='submit' id='submit'>";
echo "</form>";
	
echo "</center>";
?>

	
</body>
</html>
