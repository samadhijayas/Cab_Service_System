<!--Authors: Group 26-->

<?php require_once('db/dbcon.php') ?>
<?php

	if(isset($_POST['submit'])){
		$password = $_POST['Password'];
		$Cpassword = $_POST['Cpassword'];
		if( $password == $Cpassword){
			$firstname = $_POST['Fname'];
			$lastname = $_POST['Lname'];
			$nic = $_POST['nic'];
			$tele = $_POST['tele'];
			$email = $_POST['email'];

			$sql = "INSERT INTO passenger (firstName,lastName,nic,tele,email,pasword)VALUES('$firstname','$lastname','$nic','$tele','$email','$password') ";
			mysqli_query($connection,$sql);
			header('Location: login.php');

		}else{
			header('Location: Rider_Reg.php');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Take Me There | Online Cab Service System | Rider Signup</title>


<link href="css/style3.css" rel="stylesheet" type="text/css" media="all">


</head>


<body>
<!--header-->
	<div class="header">
		<h1>Safe reliable rides in minutes</h1>
	</div>
<!--//header-->
<!--main-->
<div class="main">
	<h2 class="sub-head">Sign Up to Ride</h2>
		<div class="sub-main">	
			<form action="Rider_Reg.php" method="POST">
				<input placeholder="First Name" name="Fname" class="name" type="text" required="">
				
				<input placeholder="Last Name" name="Lname" class="name2" type="text" required="">
				
				<input placeholder="NIC Number" name="nic" class="nic" type="text" required="">
					
				<input placeholder="Phone Number" name="tele" class="number" type="text" required="">
					
				<input placeholder="Email" name="email" class="mail" type="text" required="">
				
				<input  placeholder="Password" name="Password" class="pass" type="password" required="">
				
				<input  placeholder="Confirm Password" name="Cpassword" class="pass" type="password" required="">
					
				
				<input type="submit" value="sign up" name="submit">
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer">
	<p>Copyright &copy; 2018 | CS 2001 | Take me There | All Rights Reserved | Design by Group 26</p>
</div>
<!--//footer-->

</body>
</html>