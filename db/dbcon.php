<?php require_once('users.php'); ?>
<?php

	$connection = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

	//check the connection
	if (mysqli_connect_errno()) {
		die('Database Connection Failed' . mysqli_connect_error());
	}


?>
