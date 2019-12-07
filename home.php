<!DOCTYPE html>
<html>
<head>

<title>HOME</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="home.css">
  

	<style>
    #main {
  height: 100vh;
  width: 100%;
  background-image: url("img/img18.jpg");
  background-size: cover;
  padding-bottom: 20px;
}
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}
    
    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
      background-color: #0029;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 280px;
    }
    
    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 1;
    }
    
    /* Add styles to the form container */
    .form-container {
      max-width: 500px;
      padding: 10px;
      background-color: #0029;
      color:white
    }
    
    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }
    
    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }
    
    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
    }
    
    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
    }
    
    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
      opacity: 1;
    }
    </style>
	

</head>
<body>
	<div id="main">
		<nav>
			<img src="img/logo1.jpg" width="200" height="80">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="login.php">Admin Login</a></li>
				<li><a href="contact.html">Contact us</a></li>
        
			</ul>
		</nav>

<div class="_form">
			
    <form action="ticket.php" method="post" >
   
    	<label><h5>Date</h5></label><br>
      <input id="dateInput" type="date" name="date1" style="width: 250px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;" class="form-control" required>
      <script>

let dateInput = document.getElementById('dateInput');
 
 const cur_date = new Date();
 const cur_month = cur_date.getMonth() > 9 ? cur_date.getMonth() + 1 : '0' + (cur_date.getMonth() + 1);
 const cur_day = cur_date.getDate() > 9 ? cur_date.getDate() : '0' + cur_date.getDate();
  
 const dateStr = cur_date.getFullYear() + '-' + cur_month + '-' + cur_day;
  
 dateInput.setAttribute('min', dateStr);
    </script>
			
            <br>

        <label><h5>Pick Up</h5></label><br>  
		  	<select name="source" style="width: 250px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;" class="form-control" required />
			<?php
						include('connection.php');
						$result = mysqli_query($conn,"SELECT source FROM route;");  // source
						
						while($row = mysqli_fetch_array($result))
							{
								echo '<option value="'.$row['source'].'">';
								echo $row['source'];
								echo '</option>';
							}
						?>
				
			</select>
		<br>


		<label><h5>Drop</h5></label><br>
			<select name="dest" style="width: 250px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;" class="form-control" required />
			<?php
						include('connection.php');
						$result = mysqli_query($conn,"SELECT dest FROM route;");  // source
						
						while($row = mysqli_fetch_array($result))
							{
								echo '<option value="'.$row['dest'].'">';
								echo $row['dest'];
								echo '</option>';
							}
						?>
				
			</select><br><br>
							
	
	<input type="submit" class="btn btn-primary">
	</form>
</div><!-- _form-->
</div><!-- main-->
<button class="open-button" onclick="openForm()">View Your Tickets</button>
    
    <div class="form-popup" id="myForm">
      <form action="yourTickets.php" class="form-container" method="POST">
		<h1>Your Tickets</h1>
		<br>
		<br>    
        <label for="Cid"><b>Cid</b></label>
		<input type="Number" placeholder="Enter Cid" name="cid" required>
		<br>
		<br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      </form>
    </div>
    
    <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
    
		

</body>
</html>