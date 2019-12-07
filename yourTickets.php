<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">

    <title>Ticket</title>

</head>
<body>
<h1>MYBUS MYSEAT</h1>
<br>
<br>
<div  class="container">
<h3>Your Tickets</h3>
<br>
<?php
include_once 'connection.php';

$c_id = $_POST['cid'];

$q1 = mysqli_query($conn,"select * from customer c ,route r,booktimings b where c.id = '$c_id' and r.r_id=c.r_id and c.id=b.cid");

if($q1)
{
    $num = mysqli_num_rows($q1);
    if($num==0)
    {
        echo "<script>
	alert('Enter correct Customer id')
	window.location.href='home.php'
	</script>";
	
    }
    else{
        while($row = mysqli_fetch_array($q1))
        {
            $pid = $row['pid'];
            $name = $row['name'];
            $contact = $row['contact'];
            $seat = $row['seat'];
            $email = $row['email'];
            $date = $row['date'];
            $bdate =$row['bdate'];
            $source =$row['source'];
            $dest = $row['dest'];
            echo "<table  class='table table-bordered'>";
            
            echo "<tr><td>Payment id</td><td>$pid</td></tr>";
            echo "<tr><td>Name</td><td>$name</td></tr>";
            echo "<tr><td>Contact number</td><td>$contact</td></tr>";
            echo "<tr><td>Email id</td><td>$email</td></tr>";
            echo "<tr><td>Seats booked</td><td>$seat</td></tr>";
            echo "<tr><td>Date of travelling</td><td>$date</td></tr>";
            echo "<tr><td>Drop</td><td>$dest</td></tr>";
            echo "<tr><td>Pick Up </td><td>$source</td></tr>";
            echo "<tr><td>Time of booking </td><td>$bdate</td></tr>";
            


            echo "</table>";
            
        }
    }
}
else{
    echo "not not";
}
?>
<br>
<button onclick="window.print();return false;" class="btn btn-info">Print</button>
</div>
</body>
</html>

