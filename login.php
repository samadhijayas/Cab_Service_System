<!--Authors: Group 26-->

<?php session_start();  ?>
<?php require_once('db/dbcon.php');  ?>
<?php 
	if (isset($_POST['submit'])) {
		
			$nic = $_POST['nic'];
			$password = $_POST['password'];

			$query = "SELECT * FROM passenger 
					  WHERE nic='$nic' AND pasword = '$password' LIMIT 1 ";
			$result_set = mysqli_query($connection, $query);

			if ($result_set) {
				if (mysqli_num_rows($result_set) == 1) {
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['nic']= $user['nic'];
					$_SESSION['firstName']= $user['firstName'];
					header('Location: ./logged/home.php');
			
				}
			}else{
				echo 'username or password is not valid' ;
			}
		

	}


  if (isset($_POST['AdminLogin'])) {
		
			$adminuser = $_POST['Ausername'];
			$Apassword = $_POST['Apassword'];

      echo $adminuser.','.$Apassword;

			$query = "SELECT * FROM adminlogin 
					  WHERE username='$adminuser' AND pasword = '$Apassword' LIMIT 1 ";
			$result_set = mysqli_query($connection, $query);

			if ($result_set) {
				if (mysqli_num_rows($result_set) == 1) {
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['username']= $user['username'];
					header('Location: ./logged/adminL.php');
			
				}
			}else{
				echo 'username or password is not valid' ;
			}
		

	}
//DriverLogin

  if (isset($_POST['DriverLogin'])) {
		
			$driver = $_POST['username'];
			$password = $_POST['password'];

echo $driver." , ".$password;

			$query = "SELECT * FROM driverreg 
					  WHERE email='$driver' AND password = '$password' LIMIT 1 ";
			$result_set = mysqli_query($connection, $query);

			if ($result_set) {
				if (mysqli_num_rows($result_set) == 1) {
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['driverEmail']= $user['email'];
					header('Location: ./logged/home_driver.php');
			
				}
			}else{
				echo 'username or password is not valid' ;
			}
	}
 ?>


<!DOCTYPE html>
<html>

<head>

	<title>Take Me There | Online Cab Service System | Login</title>
  
	<meta name="authors" content="CS Project_Group 26">

<link href="css/style.css" rel='stylesheet' type='text/css' />	

</head>

<body>
	<!--start-header-->
			<div id="home" class="header two">
				
					     <div class="top-menu">
						
								<ul>
								 <li><a href="index.php">Home</a></li>
								 <li><a href="about.php">About Us</a></li>
								<li><a  href="signup.php">Signup</a></li>
								 <li><a class="active"  href="login.php">Login</a></li>
								 <li><a href="contact.php">Contact Us</a></li>
								 
								</ul>
							</div>
							<div class="logo two">
							  <a href="index.php"><h1>Take <span>me</span>There</h1></a>
						    </div>
			</div>
	
	
	<div class="about">
		<div class="container">
		 <h3 class="tittle">Sign In</h3>
				<div class="sign">
						<h1>Driver</h1>
						<h3>Find everything you need to track your success on the road.</h3>
						<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Driver Login</button>
							
				</div>
	
		
		
				<div class="sign">
						<h1>Rider</h1>
						<h3>Manage your payment options, review trip history, and more.</h3>
						<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Rider Login</button>
				</div>
		
			
				<div class="sign">
						<h1>Administrator</h1>
						<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Login</button>
				</div>
			</div>
				
	</div>	
	
	<div id="id01" class="modal">
  
  		<form class="modal-content animate" action="login.php" method="POST">

    		<div class="imgcontainer">
      			<img src="images/car.jpg" class="picture">
    		</div>


    		<div class="container">
	
      			<label for="username"><b>Username</b></label>
					<input type="text" placeholder="Enter Email" name="username" required>

      			<label for="password"><b>Password</b></label>
	  				<input type="password" placeholder="Enter Password" name="password" required>
        
      			<input type="submit" value="Login" name="DriverLogin">

    		</div>


    		<div class="container" style="background-color:#f1f1f1">
      			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    		</div>
  		
  		</form>
	</div>
	
<div id="id02" class="modal">
  
 <form class="modal-content animate" method="POST" action="login.php">
    <div class="imgcontainer">
     
      <img src="images/rider.jpg" class="picture">
    </div>

    <div class="container">
	
      <label for="username"><b>Username</b></label>
	  
			<input type="text" placeholder="Enter NIC" name="nic" required>
      <label for="password"><b>Password</b></label>
	  
			<input type="password" placeholder="Enter Password" name="password" required>
        
      <input type="submit" value="Login" name="submit">

    </div>

    <div class="container" style="background-color:#f1f1f1">
	
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

<div id="id03" class="modal">
  
  <form class="modal-content animate" method="POST" action="login.php">
    <div class="imgcontainer">
   
      <img src="images/admin.jpg" class="picture">
    </div>

    <div class="container">
	
      <label for="username"><b>Username</b></label>
	  
			<input type="text" placeholder="Enter Username" name="Ausername" required>

      <label for="password"><b>Password</b></label>
	  
			<input type="password" placeholder="Enter Password" name="Apassword" required>
        
      <input type="submit" name="AdminLogin" value="Login">

    </div>

    <div class="container" style="background-color:#f1f1f1">
	
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>

	
<!--footer-->
			<div class="footer">
				
					<div class="copy">
		              <p>Copyright &copy; 2018 | CS 2001 | Take me There | All Rights Reserved | Design by Group 26  </p>
		            </div>
			</div>
			
		<a href="#home" id="toTop" class="scroll" style="display: block;"></a>
</body>

</html>
