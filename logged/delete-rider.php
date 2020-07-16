<?php session_start();  ?>
<?php require_once('../db/dbcon.php');  ?>
<?php

    $nic = $_GET['user_id'];
    $sql = "delete from passenger where nic='$nic'";
    $x= mysqli_query($connection,$sql);
    if($x == 1){
        Header('Location: riders.php');
    }


?>