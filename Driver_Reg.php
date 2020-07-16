<!--Authors: Group 26-->
<?php require_once('db/dbcon.php') ?>
<?php	
	if(isset($_POST['submit'])){
		$password = $_POST['password'];
		$Cpassword = $_POST['Cpassword'];
		if( $password == $Cpassword){
			$name = $_POST['name'];
			$tele = $_POST['tele'];
			$email = $_POST['email'];

		
			if(isset($_POST['destination'])){
				$route = $_POST['destination'];
			}
			if(isset($_POST['Price'])){
				$price = $_POST['Price'];
			}
			$ac="";
			$nonac="";
			if(isset($_POST['type1'])){
				$type1 = $_POST['type1'];
				foreach( $type1 as $index => $r){
					if(sizeof($type1) == 3){
						$vehi =  $type1[0];
						if($type1[$index+1] == "ac"){//." , ".$type1[$index+2]."<br>";
							$ac = $type1[$index+1];
							$nonac = $type1[$index+2];
						}else{
							$ac = $type1[$index+2];
							$nonac = $type1[$index+1];
						}
						$sql2 = "INSERT INTO vehical (email,vehi,ac,nonac) VALUES('$email','$vehi','$ac','$nonac') ";
						mysqli_query($connection,$sql2);
						break;
					}else{
						$vehi =  $type1[0];
						if($type1[$index+1] == "ac"){//." , ".$type1[$index+2]."<br>";
							$ac = $type1[$index+1];
						}else{
							$nonac = $type1[$index+1];
						}
						$sql2 = "INSERT INTO vehical (email,vehi,ac,nonac) VALUES('$email','$vehi','$ac','$nonac') ";
						mysqli_query($connection,$sql2);
						break;
					}
				}
			}
			if(isset($_POST['type2'])){
				$type2 = $_POST['type2'];
				foreach( $type2 as $index => $r){
					if(sizeof($type2) == 3){
						$vehi =  $type2[0];
						if($type2[$index+1] == "ac"){//." , ".$type1[$index+2]."<br>";
							$ac = $type2[$index+1];
							$nonac = $type2[$index+2];
						}else{
							$ac = $type2[$index+2];
							$nonac = $type2[$index+1];
						}
						$sql2 = "INSERT INTO vehical (email,vehi,ac,nonac) VALUES('$email','$vehi','$ac','$nonac') ";
						mysqli_query($connection,$sql2);
						break;
					}else{
						$vehi =  $type2[0];
						if($type2[$index+1] == "ac"){//." , ".$type1[$index+2]."<br>";
							$ac = $type2[$index+1];
						}else{
							$nonac = $type2[$index+1];
						}
						$sql2 = "INSERT INTO vehical (email,vehi,ac,nonac) VALUES('$email','$vehi','$ac','$nonac') ";
						mysqli_query($connection,$sql2);
						break;
					}
				}
			}
			if(isset($_POST['type3'])){
				$type3 = $_POST['type3'];
				foreach( $type3 as $index => $r){
					if(sizeof($type3) == 3){
						$vehi =  $type3[0];
						if($type3[$index+1] == "ac"){//." , ".$type1[$index+2]."<br>";
							$ac = $type3[$index+1];
							$nonac = $type3[$index+2];
						}else{
							$ac = $type3[$index+2];
							$nonac = $type3[$index+1];
						}
						$sql2 = "INSERT INTO vehical (email,vehi,ac,nonac) VALUES('$email','$vehi','$ac','$nonac') ";
						mysqli_query($connection,$sql2);
						break;
					}else{
						$vehi =  $type3[0];
						if($type3[$index+1] == "ac"){//." , ".$type1[$index+2]."<br>";
							$ac = $type3[$index+1];
						}else{
							$nonac = $type3[$index+1];
						}
						$sql2 = "INSERT INTO vehical (email,vehi,ac,nonac) VALUES('$email','$vehi','$ac','$nonac') ";
						mysqli_query($connection,$sql2);
						break;
					}
				}
			}
			if(isset($_POST['type4'])){
				$type4 = $_POST['type4'];
				foreach( $type4 as $index => $r){
					if(sizeof($type4) == 3){
						$vehi =  $type4[0];
						if($type4[$index+1] == "ac"){//." , ".$type1[$index+2]."<br>";
							$ac = $type4[$index+1];
							$nonac = $type4[$index+2];
						}else{
							$ac = $type4[$index+2];
							$nonac = $type4[$index+1];
						}
						$sql2 = "INSERT INTO vehical (email,vehi,ac,nonac) VALUES('$email','$vehi','$ac','$nonac') ";
						mysqli_query($connection,$sql2);
						break;
					}else{
						$vehi =  $type4[0];
						if($type4[$index+1] == "ac"){//." , ".$type1[$index+2]."<br>";
							$ac = $type4[$index+1];
						}else{
							$nonac = $type4[$index+1];
						}
						$sql2 = "INSERT INTO vehical (email,vehi,ac,nonac) VALUES('$email','$vehi','$ac','$nonac') ";
						mysqli_query($connection,$sql2);
						break;
					}
				}
			}
			if(isset($_POST['type5'])){
				$type5 = $_POST['type5'];
				foreach( $type5 as $index => $r){
					if(sizeof($type5) == 3){
						$vehi =  $type5[0];
						if($type5[$index+1] == "ac"){//." , ".$type1[$index+2]."<br>";
							$ac = $type5[$index+1];
							$nonac = $type5[$index+2];
						}else{
							$ac = $type5[$index+2];
							$nonac = $type5[$index+1];
						}
						$sql2 = "INSERT INTO vehical (email,vehi,ac,nonac) VALUES('$email','$vehi','$ac','$nonac') ";
						mysqli_query($connection,$sql2);
						break;
					}else{
						$vehi =  $type5[0];
						if($type5[$index+1] == "ac"){//." , ".$type1[$index+2]."<br>";
							$ac = $type5[$index+1];
						}else{
							$nonac = $type5[$index+1];
						}
						$sql2 = "INSERT INTO vehical (email,vehi,ac,nonac) VALUES('$email','$vehi','$ac','$nonac') ";
						mysqli_query($connection,$sql2);
						break;
					}
				}
			}

			
			// echo implode('',$name.','.$tele.','.$email.','.$password);//."<br>";
			$sql = "INSERT INTO driverreg (compName,tele,email,password) VALUES('$name','$tele','$email','$password') ";

			$a = mysqli_query($connection,$sql);
			if($a == 1){
				foreach( $route as $index => $r){
					$sql1 = "INSERT INTO route (email,desti,price) VALUES('$email','$r','$price[$index]') ";
					$b = mysqli_query($connection,$sql1);
					
				}
				// foreach(){

				// }
			}
			// header('Location: login.php');
			header('Location: login.php');
		}else{
			echo "Password does not match..";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>Take Me There | Online Cab Service System | Driver Signup</title>

<link href="css/style3.css" rel="stylesheet" type="text/css" media="all">

<style type="text/css">
	.tab{
		color: white;
	}
</style>
</head>

<body>

	<div class="header">
		<h1>We need partners like you</h1>
		<h2 class="tab">Drive with us and earn great money as an independent contractor.</h2>
	</div>
<!--//header-->
<!--main-->
<div class="main">
	<h2 class="sub-head">Sign Up to Drive</h2>
		<div class="sub-main">	
			<form action="Driver_Reg.php" method="POST">
			<font color="yellow"><h2>General Information:</h2></font>

				<input placeholder="Company Name" name="name"  type="text" required="">
					
				<input placeholder="Phone Number" name="tele"  type="text" required="">
					
				<input placeholder="Email" name="email" class="mail" type="text" required="">
				
				<input  placeholder="Password" name="password" class="pass" type="password" required="">
				
				<input  placeholder="Confirm Password" name="Cpassword" class="pass" type="password" required="">
				
				
				<font color="yellow"><h2>Your Destinations:</h2></font>	
				
				<div class="tab">
				<table border="0" align="center" cellpadding="20">
					<thead>
						<tr bgcolor="green" >
							<th>Destination</th>
							<th>Price</th>
						</tr>
					</thead>

					<tbody align="left">
						<tr>
							<td><input type="checkbox" name="destination[]" value="Galleface"> Galleface</td>
							<td><input type="Number" name="Price[]"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="destination[]" value="Kandy"> Kandy</td>
							<td><input type="Number" name="Price[]"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="destination[]" value="Arugam-Bay"> Arugam-Bay</td>
							<td><input type="Number" name="Price[]"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="destination[]" value="Hikkaduwa"> Hikkaduwa</td>
							<td><input type="Number" name="Price[]"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="destination[]" value="NuwaraEliya"> Nuwara Eliya</td>
							<td><input type="Number" name="Price[]"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="destination[]" value="Galle">Galle</td>
							<td><input type="Number" name="Price[]"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="destination[]" value="Jafana"> Jaffna</td>
							<td><input type="Number" name="Price[]"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="destination[]" value="Anuradhapura"> Anuradhapura</td>
							<td><input type="Number" name="Price[]"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="destination[]" value="Polonnaruwa"> Polonnaruwa</td>
							<td><input type="Number" name="Price[]"></td>
						</tr>
					</tbody>
				</table>
				
				<font color="yellow"><h2>Your Vehicles:</h2></font>
				
				<table border="0" align="center" cellpadding="20">
					<thead>
						<tr bgcolor="green" >
							<th>Vehicle</th>
							<th>Type</th>
						</tr>
					</thead>

					<tbody align="left">
						<tr>
							<td><input type="checkbox" name="type1[]" value="Nano"> Nano</td>
							<td><input type="checkbox" name="type1[]" value="ac"> A/C<br>
								<input type="checkbox" name="type1[]" value="nonac">Non A/C</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="type2[]" value="Mini"> Mini</td>
							<td><input type="checkbox" name="type2[]" value="ac"> A/C<br>
							<input type="checkbox" name="type2[]" value="nonac">Non A/C</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="type3[]" value="Car"> Car</td>
							<td><input type="checkbox" name="type3[]" value="ac"> A/C<br>
							<input type="checkbox" name="type3[]" value="nonac">Non A/C</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="type4[]" value="Van"> Van </td>
							<td><input type="checkbox" name="type4[]" value="ac"> A/C<br>
							<input type="checkbox" name="type4[]" value="nonac">Non A/C</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="type5[]" value="VIP"> VIP </td>
							<td><input type="checkbox" name="type5[]" value="ac"> A/C<br>
							<input type="checkbox" name="type5[]" value="nonac">Non A/C</td>
						</tr>
					</tbody>
				</table>
				
</div>

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