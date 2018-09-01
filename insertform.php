<!DOCTYPE html>
<html>
<header>
	<title>MY FIRST EVER APP</title>
	<!-- <meta charset="UTF-8"> -->
	<meta name="viewport"  charset="UTF-8" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="Style/Styles.css"> -->
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</header>

<body>

	<style>
		body div #btnbacktomenu{
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		body div #btnbacktomenu:hover{
			background-color: #707172;
			cursor: pointer;
		}
</style>

	<div class="wrapper">
		<h1>ADD</h1>
		<div class="form_wrapper">		
			<form method="POST" action="insert.php">
				<label for="fname">Full Name</label>
				<input id="fname" type="text" name="client_name" placeholder="Your Full Name" required><br>
				<label for="zip">Zip Code</label>
				<input id="zip"  type="text" name="zip" placeholder="Zip" required><br>				
				<label for="age">Age</label>
				<input id="age" type="number" name="Age" placeholder="Age" required><br>				
				<label for="city">City</label>
				<input id="city" type="text" name="city" placeholder="City" required><br>				
				<label for="invo_dat">Date</label>
				<input id="invo_dat" type="Date" name="invoice_date" required><br>			
				<label for="amount">Amount</label>
				<input id="amount" type="text" name="invoice_amt" placeholder="Amount" required><br>	
				<label for="detail">Details</label>
				<input id="detail" type="text" name="invoice_description" placeholder="Details " required><br>
				
				<input id="btn_sub" type="submit" name="submit">
				
				
			</form>
		</div>
	</div>
</body>
</html>

