<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="details.css">

    <title>Ticket</title>
    <script>
       
        </script>
    
</head>
<body>
<?php
include 'connection.php';
$name = $_POST['name'];
$contact = $_POST['number'];
$email = $_POST['email'];
$date = $_POST['date1'];
$seat = $_POST['seat1'];
$route = $_POST['route1'];
$price = $_POST['price'];
$ref = $_POST['ref'];
//print $seat;
$seatarray = explode(",",$seat);
//print_r($seatarray);
echo "<br>";
//$count = count($seatarray);
//echo $count;
for($i = 0;$i<count($seatarray);$i++){
    $s1 = $seatarray[$i];
  
    if(mysqli_query($conn,"insert into reserve (r_id,s_id,date) values('$route','$s1','$date');"))
    {
       // echo "inserted";
    }
    else{
        echo "not inserted";
    }
}
//insert payment table and cutomer table

$q1 = mysqli_query($conn, "insert into payment (pid,refno,contact,price) values(NULL,'$ref','$contact','$price');");
if($q1){
    //echo "inserted";
}
else{
    echo "not inserted payment";
}

$q2 = mysqli_query($conn, "SELECT pid from payment where refno ='$ref';");
$ex2 = mysqli_fetch_array($q2);
$num1 = mysqli_num_rows($q2);
if($num1==1){
$pid = $ex2['pid'];
//echo $pid;
}

$q3 = mysqli_query($conn,"insert into customer (id,pid,email,date,price,contact,seat,name,r_id) values('','$pid','$email','$date','$price','$contact','$seat','$name','$route');");

if($q3){
    echo"<br>";
   // echo "inserted into cust";
}
else{
    echo "not inserted into cust";
}

$q4 = mysqli_query($conn, "select id from customer where pid='$pid';");
$ex3 = mysqli_fetch_array($q4);
$num2 = mysqli_num_rows($q4);
if($num2==1){
    $cid = $ex3['id'];
}

?>

<h1>YOUR TICKET'S</h1>
<br>
<table class="table table-bordered">
    <tr>
        <td><h6>Date</h6></td>
        <td><p><?php echo $date ?></p></td>
    </tr>

    <tr>
        <td><h6>Seats booked</h6></td>
        <td><p><?php echo $seat ?></p></td>
    </tr>

    <tr>
        <td><h6>Payment Id</h6></td>
        <td><p><?php echo $pid ?></p></td>
    </tr>

    <tr>
        <td><h6>Contact_no</h6></td>
        <td><p><?php echo $contact ?></p></td>
    </tr>

    <tr>
        <td><h6>CId</h6></td>
        <td><p><?php echo $cid ?></p></td>
    </tr>

    <tr>
        <td><h6>Name</h6></td>
        <td><p><?php echo $name ?></p></td>
    </tr>

    <tr>
        <td><h6>email id</h6></td>
        <td><p><?php echo $email ?></p></td>
    </tr>

</table>
<br>
<h5> PLEASE MAKE A NOTE OF THE Customer Id AND Payment Id</h5>
<a href="home.php">back to home</a>
<br>
<br>

<?php
$mail = "THANKS FOR BOOKING $name, \n \n Travelling date: $date \n seat booked: $seat \n Route Number: $route\n Your customer id :$cid\n please keep a note of c_id";
mail($email, 'Bus Resrvation', $mail,'From: mybusmyseat@gmail.com');
?>


</body>
</html>
