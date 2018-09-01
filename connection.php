<?php


	$connection = mysqli_connect("localhost","root","","accounting");

	if(!$connection){
		die("Connection Failed". mysqli_connect_error());
	}
	else{
		// echo "Connected Successfully";
	}


?>