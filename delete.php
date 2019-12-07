<?php
$route = $_POST['r_id'];
include 'connection.php';


if(($q1 = mysqli_query($conn,"delete from route where r_id='$route';")))
{
    //echo "inserted"
    echo "<script>
	alert('deleted')
	window.location.href='admin.php'
	</script>";
}
else
{
    echo "not delelted";
}

?>