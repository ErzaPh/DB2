<!DOCTYPE html>
<html>
<head>
	<title>MY FIRST EVER APP</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
</head>
<body>
	<div class="wrapper">
		<h1>Welcome to my first ever online application</h1>
		<div class="form_wrapper">
			<center>
			<form method="POST" action="insert.php">
				<input type="text" name="client_name" placeholder="Full Name"><br>
				<input type="text" name="zip" placeholder="Zip"><br>
				<input type="number" name="Age" placeholder="Age"><br>
				<input type="text" name="city" placeholder="city"><br>
				
				<input type="Date" name="invoice_date"><br>
				<input type="number" name="invoice_amt" placeholder="Amount"><br>
				<input type="text" name="invoice_description" placeholder="Details "><br>

				<input type="submit" name="submit">
			</form>
			</center>
		</div>
	</div>
</body>
</html>

