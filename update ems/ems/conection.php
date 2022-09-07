<?php
	$conn = new mysqli("localhost","root","","ems");
	
	// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	if(!session_start())
	{
		session_start();	
	}
	
	
?>