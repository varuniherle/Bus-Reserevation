<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    
</head>
<body>
    <h1> details</h1>
    <br>
    <table align ="center" class = "table table-dark" >
        
        <th>Id</th>
        <th>Name</th>
        <th>Contact</th>
        <th>email</th>
        <th>seat</th>

<?php

$r_id =$_POST['r_id'];
$date1 =$_POST['date'];

    include 'connection.php';


$q1=mysqli_query($conn,"select id,name,contact,seat,email from customer where date='$date1' and r_id=$r_id ;");

if($q1)
{
    $num = mysqli_num_rows($q1);
    if($num==0)
    {
        echo "<script>
        alert('No seat is booked')
        window.location.href='admin.php'
        </script>";
        
    }
    //echo "exec";
    else{
 while($row = mysqli_fetch_array($q1))
 {
     $id = $row['id'];
     $name = $row['name'];
     $contact = $row['contact'];
     $seat = $row['seat'];
     $email = $row['email'];

     echo "<tr>";
     echo "<td>$id</td>";
     echo "<td>$name</td>";
     echo "<td>$contact</td>";
     echo "<td>$email</td>";
     echo "<td>$seat</td>";
     echo "</tr>";
       
 }
}
}
else{
    echo "checkkk upadation";
}
?>
</table>

</body>
</html>