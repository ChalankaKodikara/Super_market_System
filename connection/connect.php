<?php

//main connection file for both admin & front end
//$servername = "localhost"; //server
//$username = "root"; //username
//$password = ""; //password
//$dbname = "online_rest";  //database

$servername = "us-cdbr-east-05.cleardb.net"; //server
$username = "b124953b3fbad0"; //username
$password = "c06d0f19"; //password
$dbname = "heroku_2541e00717b4e32";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>