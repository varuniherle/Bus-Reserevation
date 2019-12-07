<?php
include 'connection.php';

$rid = $_POST['r_id'];
$source =$_POST['source'];
$dest = $_POST['dest'];
$price =$_POST['price'];
$time = $_POST['time'];
$type =$_POST['type'];

$smt = "insert into route(r_id,source,dest,price,time,type) values('$rid','$source','$dest','$price','$time','$type')";
$q1 = mysqli_query($conn,$smt);

if($q1)
{
    echo "<script>
    alert('added successfully');
    window.location.href='admin.php';
    </script>";
}
else{
    echo "not added";
}
?>