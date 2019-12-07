<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<style>
		body{
	background: url("img/img14.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	
}
	</style>
</head>
<body>
<nav>
			
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="logout.php">logout</a></li>
					
			</ul>
		</nav>

<!-- form begins-->
<i><h5>
<div class="container">
		<div class="login-box">
		<div class="row">
		<center>
			<div class="login-left">
				<h2>Login Here</h2>
				<form action="validate.php" method="post">
					<div class="form-group">
						<label>User name</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" name="pass" class="form-control" required>
					</div>
					<input type="submit" class="btn btn-primary">
					<br>
					<h6>FOR ADMIN ONLY</h6>
				</form>
			</div>
			

			
		</div>
		</center>
	</div>
	</div>


</body>
</html>