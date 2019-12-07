<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="details.css">
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>details</title>
</head>
<body>
<center><h1 >ENTER YOUR DETAILS</h1></center>
<?php
include 'connection.php';
//print_r($_POST);
$date =$_POST['day'];
$route =$_POST['rot'];
$source =$_POST['source'];
$dest =$_POST['dest'];

if(isset($_POST['submit'])){
    $seat = $_POST['seat'];
   $seatarry = implode(",",$seat);
   //print($seatarry); //converts array into string 
   
}
$seat1 = explode(",",$seatarry); //converts into array
$num1 = count($seat1);
//print("seatttt"); echo "<br>";
//print($num1);
//echo "<br>";

$state = "SELECT price from route where r_id ='$route'"; //selects the price of the bus
$q6 = mysqli_query($conn,$state);
$ex6 = mysqli_fetch_array($q6);
$num = mysqli_num_rows($q6);
if($num==1)
{
   $price = $ex6['price']; 
}
echo "<br>";
$tprice = $num1 * $price;
//echo $tprice;


?>

<div class="container">
<div class="row">
<div class="col-lg-6">
<form  action="payment.php" method="post">
<div class="form-group" width="300px">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="form-group" width="300px">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name='name' required>
  </div>

  <div class="form-group" width="300px">
    <label for="number">Contact number:</label>
    <input type="number" class="form-control" id="number" name='number' required>
  </div>

  <div class="form-group" width="300px">
    <label for="refrence"> refrence no:</label>
    <input type="text" class="form-control" id="Reference" name="ref" placeholder="plz enter reference number" required>
  </div>

  <div class="form-group" width="300px">
    <label for="route">Route:</label>
  <input type="number" class="form-control" id="route" value="<?php echo $route?>" name ="route1" readonly>
  </div>

  <div class="form-group" width="300px">
    <label for="date">Date:</label>
    <input type="date" class="form-control" id="date" value="<?php echo $date ?>" name ="date1" readonly>
  </div>

  <div class="form-group" width="300px">
    <label for="seat">Seat nos:</label>
    <input type="" class="form-control" id="seat" value="<?php echo $seatarry ?>" name="seat1" readonly>
  </div>

  <div class="form-group" width="300px">
    <label for="price"> Total Price:</label>
    <input type="" class="form-control" id="seat" value="<?php echo $tprice ?>" name="price" readonly>
  </div>

  

  <button type="submit" class="btn btn-primary" name="submit1">proceed</button>
  <br><br>
</form>
</div> 


<div class="col-lg-6">
<button type="button" data-toggle="collapse" data-target="#demo" class="btn btn-info">bank details</button>
<br>
<center>
	<div class="_button" id="demo">
    <br>
<table class="table table-bordered">
<tr>
    <td><h6>Account no:</h6></td>
    <td><p>2556780008</p></td>
</tr>
<tr>
    <td><h6>Account Holder name:</h6></td>
    <td><p>Myseat</p></td>
</tr>
<tr>
    <td><h6>Bank name:</h6></td>
    <td><p>omg bank</p></td>
</tr>
<tr>
    <td><h6>IFSC CODE:</h6></td>
    <td><p>OMGB009997</p></td>
</tr>
</table>
  </div>


</div><!--- div col-->
</div><!--- div row-->
</div><!---div container-->


</body>
</html>

