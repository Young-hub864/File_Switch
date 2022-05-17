<?php
	//connect to database
	$mysqli = new  mysqli("localhost", "root", "", "file_upload");

	//check connection
	if($mysqli->connect_error){
		die("connection failed. ". $mysqli->connect_error);
	}
	
