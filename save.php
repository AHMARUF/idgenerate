<?php

$conn = mysqli_connect("localhost","root","","id_generate");
	

// Check connection
if ($conn->connect_error>0) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	echo "Connected successfully";
}



$name = $_REQUEST['name'];



?>