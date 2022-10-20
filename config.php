
	<?php 

	/*
		Encapsulate sensitive data away from the public data.
	*/
$databaseHost = 'localhost';
$databaseName = 'Sample';
$databaseUsername = 'root';
$databasePassword = 'password';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

	//check connection
	if(!$mysqli)
	die("connection failed:" . mysqli_connect_error());

	//echo "Connected successfully <br>";

		

	?>
