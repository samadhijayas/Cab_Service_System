<?php require_once('../db/dbcon.php') ?>
<?php
    $user_list='';
    if(isset($_GET['show'])){
      $user_list='';

      $destination = $_GET['destination'];
      $vehi = $_GET['vehi'];
      $type = $_GET['type'];

      echo $destination." , ".$vehi." , ".$type;

      if($type == "ac"){
        $sql = "SELECT v.vehi,r.price FROM vehical v, route r WHERE v.email = r.email AND r.desti='$destination' AND v.ac='ac' AND v.vehi='$vehi'";
       $result = mysqli_query($connection,$sql);
       if ($result) {
            while ($user = mysqli_fetch_assoc($result)) {
              $vehi= $user['vehi'];
              $price = $user['price'];
              $user_list.="<tr>";
              $user_list.="<td>{$user['vehi']}</td>";
              $user_list.="<td>{$user['price']}</td>";
              $user_list.="<td><a onclick=getUrl();>Pick this Ride</a></td>";
              $user_list.="</tr>";

            }
          }

      }elseif($type == "nonac"){
        $sql = "SELECT v.vehi,r.price FROM vehical v, route r WHERE v.email = r.email AND r.desti='$destination' AND v.ac='nonac' AND v.vehi='$vehi'";
        $result = mysqli_query($connection,$sql);
        if ($result) {
            while ($user = mysqli_fetch_assoc($result)) {
              $vehi= $user['vehi'];
              $price = $user['price'];
              $user_list.="<tr>";
              $user_list.="<td>{$user['vehi']}</td>";
              $user_list.="<td>{$user['price']}</td>";
              $user_list.="<td><a onclick=getUrl();>Edit</a></td>";
              $user_list.="</tr>";

            }
          }

      }
    }

?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Home</title>
 
  <link rel="stylesheet" type="text/css" href="CSS/style.css" />
  
  <style type="text/css">
    #header{
      background-image: url("Backgrounds/guy.png");
      background-repeat: no-repeat;
    }
  
  </style>
  
</head>

<body>
   <a name="home"></a>
  <div id="main">

      <div id="header">

        <div id="logo">

          <div id="logo_text">

            <h1>Take <span class="logo_colour">Me </span>There</h1>

            <h2>Your safety and comfort is our concern</h2>

          </div>

        </div>
      
      <div id="menubar">
        
        <ul id="menu">
          <li><a href="home.php">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="req.php">Request a Ride</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>

      </div>
    </div>
  </div>

        <div id="hd1">
        
        <div id="logo1">

          <a href="profile.php">
            <h1>Req<span>uest</span> a Ri<span>de</span></h1>
          </a>

        </div>
      </div>
  <div id="menubot"></div>
  
      <div id="container">
        <h3 id="tittle">Enter the Information</h3>
     

	
		<form action="req.php" method="GET">
				<h3>Destination</h3>
				
		<div>
						<select name="destination" required="">

							<!--<option value="">Destination</option>-->

							<option value="Galleface" selected>Galleface</option>
                <option value="Kandy">Kandy</option>   
                <option value="Arugam-Bay">Arugam-Bay </option>
                <option value="Hikkaduwa">Hikkaduwa</option>
                <option value="NuwaraEliya">Nuwara Eliya</option>
                <option value="Galle">Galle</option>
                <option value="Jafana">Jaffna</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Polonnaruwa">Polonnaruwa</option>      
						</select>

					</div>
					<br>
			
				
				<h3>About The Vehicle</h3>

					<div>
						
						<select name="vehi"  required="">

							<!--<option value="">Vehicle type</option>-->

							<option value="Nano" selected>Nano</option>
                <option value="Mini">Mini</option>   
                <option value="Car">Car</option>
                <option value="Van">Van</option>
                <option value="VIP">VIP</option>       
						</select>

					</div>
					<br>
				

				<div>
						<input type="radio" name="type" value="ac">A/C
            <input type="radio" name="type" value="nonac">Non A/C
						</div>
				
				 <input type="submit" value="Show me" name="show">
			</form>
        </div>

        <table>
      
        <tr>
          <th>Vehical</th>
          <th>Price</th>
          <th>Pick a Ride</th>
        </tr>
        <?php echo $user_list; ?>
      
    </table>

        <div class="footer">
        
          <div class="copy">
                  <p>Copyright &copy; 2018 | CS 2001 | Take me There | All Rights Reserved | Design by Group 26 </p>
                </div>
        
      </div>
    <a href="#home" id="toTop" style="display: block;"></a>


    </body>

    <script type="text/javascript">
      function getUrl(){
        alert("Your Ride is Ready!!!");
        window.location.href="req.php";
      }
    </script>
    
</html>
