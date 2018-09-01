<?php
	require_once("connection.php");

	//client
	$client_name = $_POST["client_name"];
	$zip = $_POST['zip'];
	$age = $_POST['Age'];
	$city = $_POST['city'];
	//invoices
	$invoice_date = $_POST['invoice_date'];
	$invoice_amt = $_POST['invoice_amt'];
	$invoice_desc = $_POST['invoice_description'];

	$sql = "INSERT INTO client(client_name, client_zip, client_age, client_city)VALUES('$client_name','$zip', '$age', '$city')";
	$result = mysqli_query($connection,$sql);

	$client_id = mysqli_insert_id($connection);


	$ssql = "INSERT INTO invoices(client_id,invoice_date,invoice_amt,invoice_description)VALUES('$client_id','$invoice_date','$invoice_amt','$invoice_desc')";
	//$rresult = mysqli_query($connection,$ssql);





	if (mysqli_query($connection, $ssql)) {
		// echo "New record created successfully";
		exec('php index.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}




	
	

?>