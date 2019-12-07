<?php

$r_id =$_POST['r_id'];
$price =$_POST['price'];

    include 'connection.php';

$st = "update route set price = $price WHERE r_id = '$r_id'";
if(($q1=mysqli_query($conn,$st)))
{
    //echo "inserted";
    echo "<script>
	alert('updated ')
	window.location.href='admin.php'
	</script>";
}
else{
    echo "checkkk upadation";
}
?>
