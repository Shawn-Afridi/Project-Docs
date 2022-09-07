<?php
// connect local host!

 $conn=new mysqli("localhost", "root", "", "emsdemo");
 
 // connect succesfull or not!
 
 if($conn->connect_error){
	 	
		die('connection is failed! ' . $conn->connect_error);
	 }
	 else{
		 	//echo 'Hello Skr';
		 }
	
	// session start or end!
	
	if(!session_start())
	{
		session_start();
	}
	
?>