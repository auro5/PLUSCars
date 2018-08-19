<html>
<head>
	<link rel="stylesheet" href="buy.css"/>
</head>
<body>
<div id="openModal" class="modalDialog">
	<div>
		<h2>Booking Details</h2>
		<a href="homepage.php" title="Close" class="close">X</a>
		<?php   
// Create connection
$servername = "localhost"; //your hostname (normally localhost)
$username = "root"; //database username
$password = ""; //database password
$dbname = "login"; //database name
// Check connection
$conn = mysql_connect($servername, $username, $password) or die(mysql_error());
//select the database 
mysql_select_db($dbname) or die(mysql_error());
//echo "string";

$userName = $_POST["user"]; 
$email = $_POST["email"]; 
$address = $_POST["address"];
$city = $_POST["city"];
$contact=$_POST["contact"]; 
$model = $_POST["model"]; 
$colour = $_POST["colour"]; 
$query = mysql_query("INSERT INTO booking VALUES ('$userName','$contact','$address','$city','$email','$model','$colour')")
		or die(mysql_error()); 
	if($query)
	{ ?>
		<p>Name : <?php echo "$userName"; ?> </p>
		<p>Contact : <?php echo "$contact"; ?> </p>
		<p>Address : <?php echo "$address"; ?> </p>
		<p>City : <?php echo "$city"; ?> </p>
		<p>Email : <?php echo "$email"; ?> </p>		
		<p>Model : <?php echo "$model"; ?> </p>
		<p>Colour : <?php echo "$colour"; ?> </p>
	<?php
	}
?>		
	</div>
</div>
</body>
</html>