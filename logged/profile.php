<?php session_start();  ?>
<?php require_once('../db/dbcon.php');  ?>
<?php
  if (!isset($_SESSION['nic'])) {
    header('Location: ../login.php');
  }
  $usernic = $_SESSION['nic'];
  $user_list = '';
  $nic4='';
  $query = "SELECT * FROM passenger where nic='$usernic' ORDER BY firstname";
  $users = mysqli_query($connection,$query);
  if ($users) {
    while ($user = mysqli_fetch_assoc($users)) {
      $nic= $user['nic'];
      $nic4=$nic;
      $fname= $user['firstName'];
      $Lname = $user['lastName'];
      $tele= $user['tele'];
      $email= $user['email'];
      $user_list.="<tr>";
      $user_list.="<td>{$user['firstName']}</td>";
      $user_list.="<td>{$user['lastName']}</td>";
      $user_list.="<td>{$user['nic']}</td>";      
      $user_list.="<td>{$user['tele']}</td>";      
      $user_list.="<td>{$user['email']}</td>";//    edit-user.php?user_id={$user['nic']}
      $user_list.="<td><a onclick=getUrl();>Edit</a></td>";
      $user_list.="<td><a href='delete-rider.php?user_id={$user['nic']}'>Delete</a></td>";
      $user_list.="</tr>";

    }
  }
/*?>

<?php*/
  if(isset($_POST['update'])){
      //$nic4= $_POST['nic2'];
      $Fname1= $_POST['Fname'];
      $Lname1 = $_POST['Lname'];    //UPDATE passenger SET tele='asd' WHERE nic='n';
      $tele1= $_POST['tele'];
      $email1= $_POST['email'];

      echo $nic4.",".$Fname1.",".$Lname1.",".$tele1.",".$email1;

  $query = "UPDATE passenger SET firstName='$Fname1', lastName='$Lname1', tele='$tele1', email='$email1' where nic='$nic4'";
  $users = mysqli_query($connection,$query);
  Header('Location: profile.php');
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
            <h1>Pro<span>fi</span>le</h1>
          </a>

        </div>
      </div>
  <div id="menubot"></div>

   <br><br><br>
        <h3 id="tittle">General Information</h3>

         <table>
      
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>NIC</th>
          <th>Contact Number</th>
          <th>Email</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php echo $user_list; ?>
      
    </table>

    <div class="sub-main" id="edit" style="margin-left: 10em;"> 
      <form action="profile.php" method="POST">
        <!--<input placeholder="NIC Number" disabled name="nic2" class="nic" type="text" id="nic" required="" style="width: 400px;margin-bottom: 5px;"  value="<?php echo $nic; ?>"><br>-->
        <input type="text" name="nic2" disabled style="width: 400px;margin-bottom: 5px;"  value="<?php echo $nic; ?>"><br>

        <input placeholder="First Name" name="Fname" class="name" type="text" required="" style="width: 400px;margin-bottom: 5px;" value="<?php echo $fname; ?>"><br>
        
        <input placeholder="Last Name" name="Lname" class="name2" type="text" required="" style="width: 400px;margin-bottom: 5px;" value="<?php echo $Lname; ?>"><br>
          
        <input placeholder="Phone Number" name="tele" class="number" type="text" required="" style="width: 400px;margin-bottom: 5px;" value="<?php echo $tele; ?>"><br>

        <input placeholder="Email" name="email" class="name" type="text" required="" style="width: 400px;margin-bottom: 5px;" value="<?php echo $email; ?>"><br>
<!--          
        <input placeholder="Email" name="email" class="mail" type="text" required=""><br>
        
        <input  placeholder="Password" name="Password" class="pass" type="password" required=""><br>-->
      
       <center><button style="width:auto;" name="update">Update</button>
      <button style="width:auto;">Cancel</button></center>

       </form>
    </div>
        
 <br><br><br><br>
   <div class="footer">
        
          <div class="copy">
                  <p>Copyright &copy; 2018 | CS 2001 | Take me There | All Rights Reserved | Design by Group 26 </p>
                </div>
        
      </div>
    <a href="#home" id="toTop" style="display: block;"></a>

    <script type="text/javascript">
      var x = document.getElementById("edit");
        x.style.display="none";


        function getUrl(){
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
              x.style.display = "none";
          }  
        }

    
    </script>
    </body>
</html>
