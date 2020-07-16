<?php session_start();  ?>
<?php require_once('../db/dbcon.php');  ?>
<?php
  if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
  }
//   $usernic = $_SESSION['username'];
  $user_list = '';
//   $nic4='';
  $query = "SELECT * FROM passenger ORDER BY firstName";
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
      $user_list.="<td><a href='delete-rider.php?user_id={$user['nic']}'>Delete</a></td>";
      $user_list.="</tr>";

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
          <li><a href="adminL.php">Home</a></li>
          <li><a href="riders.php">Riders</a></li>
          <li><a href="drivers.php">Drivers</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

         <div id="hd1">
        
        <div id="logo1">

          <a href="riders.php">
            <h1>Ri<span>de</span>rs</h1>
          </a>

        </div>
      </div>
  <div id="menubot"></div>
<br><br><br><br>
 <div >
        <table>
      
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>NIC</th>
          <th>Contact Number</th>
                    <th>Email</th>
          <th>Delete</th>
        </tr>
        <?php echo $user_list; ?>
                </table>          

          

        </div>
<br><br><br><br><br><br><br><br>
   

       <div class="footer">
        
          <div class="copy">
                  <p>Copyright &copy; 2018 | CS 2001 | Take me There | All Rights Reserved | Design by Group 26 </p>
                </div>
        
      </div>
    <a href="#home" id="toTop" style="display: block;"></a>


    </body>
</html>
