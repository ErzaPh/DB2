<!DOCTYPE html>
<html>
<header>
	<title>MY FIRST EVER APP</title>
	<!-- <meta charset="UTF-8"> -->
	<meta name="viewport"  charset="UTF-8" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="Style/Styles.css"> -->
	<link rel="stylesheet" type="text/css" href="styles/index_css.css">



</header>

<body>
<div id="wrapper_top" class="w3-bar1 w3-green">
		<ul class="ful">
			<li><button class="w3-bar-item w3-button" onclick='document.getElementById("ifr").src="insertform.php";' type="button">Add</button></li>
			<li><button class="w3-bar-item w3-button" onclick="location.href='http://www.google.com'" type="button">Delete</button></li>
			<li><button class="w3-bar-item w3-button" onclick="location.href='http://www.example.com'" type="button">Update</button></li>
			<li><button class="w3-bar-item w3-button" onclick="location.href='http://www.example.com'" type="button">View Records</button></li>
			<!--<li><button class="w3-bar-item w3-button" onclick="location.href='http://www.example.com'" type="button">Loans</button></li> -->
		</ul>
	</div> 
	<div id='ifrm_cont' class="ifrmdsgn">
	<iframe id='ifr' frameborder="0" >
	</div>
</body>
</html>