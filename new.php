<html>
<body>

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

NewUser();

function NewUser()
{ 
	$userName = $_POST["user"]; 
	$email = $_POST["email"]; 
	$password = $_POST["password"];
	$ans = $_POST["quest"];
	$contact=$_POST["contact"]; 
	$query = mysql_query("INSERT INTO userlist VALUES 
		('$userName','$password','$email','$contact','$ans')")
		or die(mysql_error()); 
	if($query) 
	{
		mysql_query("INSERT into active VALUES ('$_POST[user]')"); 
		header("location:homepage.php");
	}	 
} 

?>

</body>
</html>