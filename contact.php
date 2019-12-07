<?php
include 'connection.php';
if(isset($_POST["insert_btn"]))
{
	$sql ="CALL insertData('".$_POST["name"]."','".$_POST["email"]."','".$_POST['message']."')";
	if(mysqli_query($conn,$sql))
	{
		echo "<script>
		alert('sent')
		window.location.href='contact.html'
		</script>";
		


	}
	
}
?>