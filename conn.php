<?php
	$conn = mysqli_connect('us-cdbr-east-05.cleardb.net', 'b124953b3fbad0', 'c06d0f19', 'heroku_2541e00717b4e32') or die(mysqli_error());
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>