<?php
// connect local host!

 $conn=new mysqli("localhost", "root", "", "portfolio");
 
 // connect succesfull or not!
 
 if($conn->connect_error){
	 	
		die('connection is failed! ' . $conn->connect_error);
	 }
	 if(!session_start())
	{
		session_start();	
	}
	
?>