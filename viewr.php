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
    <h1>Route details</h1>
    <br>
    <table align ="center" class = "table" >
        
        <th>R_id</th>
        <th>Source</th>
        <th>Destination</th>
        <th>Price</th>
        

<?php
    include 'connection.php';


$q1=mysqli_query($conn,"select * from route ;");

if($q1)
{
    $num = mysqli_num_rows($q1);
    if($num==0)
    {
        echo "<script>
        alert('No routes')
        window.location.href='admin.php'
        </script>";
        
    }
   
    else{
 while($row = mysqli_fetch_array($q1))
 {
     $id = $row['r_id'];
     $source= $row['source'];
     $dest = $row['dest'];
     $price = $row['price'];
     

     echo "<tr>";
     echo "<td>$id</td>";
     echo "<td>$source</td>";
     echo "<td>$dest</td>";
     echo "<td>$price</td>";
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