<?php session_start();  ?>
<?php require_once('../db/dbcon.php');  ?>
<?php
  if (!isset($_SESSION['driverEmail'])) {
    header('Location: ../login.php');
  }
  $driverEmail = $_SESSION['driverEmail'];
  $query = "SELECT * FROM driverreg where email='$driverEmail'";
  $users = mysqli_query($connection,$query);
  $compName = '';
  $tele = '';
  $email= '';
  $passwd='';
  if ($users) {
    while ($user = mysqli_fetch_assoc($users)) {
      $compName = $user['compName'];
      $tele = $user['tele'];
      $email = $user['email'];
      $passwd = $user['password'];
    }
  }

  if(isset($_POST['update'])){
      //$nic4= $_POST['nic2'];
      $Fname1= $_POST['name'];
      $Lname1 = $_POST['paswd'];    //UPDATE passenger SET tele='asd' WHERE nic='n';
      $tele1= $_POST['tele'];
      $email1= $_POST['email'];

      echo $Fname1.",".$Lname1.",".$tele1.",".$email1;

  $query = "UPDATE driverreg SET compName='$Fname1', password='$Lname1', tele='$tele1' where email='$email1'";
  $users = mysqli_query($connection,$query);
  Header('Location: profile_driver.php');
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
         <li><a href="home_driver.php">Home</a></li>
          <li><a href="profile_driver.php">Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
    
    <div id="hd2">
        
        <div id="logo1">

          <a href="profile_driver.php">
            <h1>Pro<span>fi</span>le</h1>
          </a>

        </div>
      </div>
  <div id="menubot"></div>
  
      <div id="container">
        <h3 id="tittle">General Information</h3>
        <div class="sub-main" id="edit" style="margin-left: 10em;"> 
          <form action="profile_driver.php" method="POST">

            <input type="text" name="name" style="width: 400px;margin-bottom: 5px;"  value="<?php echo $compName; ?>"><br>

            <input placeholder="Tele Phone" name="tele" class="name" type="text" required="" style="width: 400px;margin-bottom: 5px;" value="<?php echo $tele; ?>"><br>
            
            <input placeholder="Email"  name="email" class="name2" type="text"  required="" style="width: 400px;margin-bottom: 5px;" value="<?php echo $email; ?>"><br>
              
            <input placeholder="Password" name="paswd" class="number" type="text" required="" style="width: 400px;margin-bottom: 5px;" value="<?php echo $passwd; ?>"><br>

          <center><button style="width:auto;" name="update">Update</button>
          <button style="width:auto;">Cancel</button></center>

          </form>
    </div>
      </div>

        <div class="footer">
        
          <div class="copy">
                  <p>Copyright &copy; 2018 | CS 2001 | Take me There | All Rights Reserved | Design by Group 26 </p>
                </div>
        
      </div>
    <a href="#home" id="toTop" style="display: block;"></a>

    </body>
</html>
