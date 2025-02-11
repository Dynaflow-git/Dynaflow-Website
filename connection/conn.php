<?php

//main connection file for both admin & front end
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "dfis_db"; //databases

// Create connection
$con = mysqli_connect($hostname, $username, $password, $dbname); // connecting 
// Check connection

if (!$con) {


  die("Connection failed: " . mysqli_connect_error());
}
else{
  //  echo 'Connection Successfully!';
}

// mysqli_close($con);
