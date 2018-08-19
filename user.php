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
	SignIn();

function SignIn()
{
	$query = mysql_query("SELECT *  FROM userlist 
		where Username = '$_POST[user]' 
		AND Password = '$_POST[password]'") or die(mysql_error());
	$rows = mysql_num_rows($query);
	if ($rows == 1) 
	{	
		mysql_query("INSERT into active VALUES ('$_POST[user]')");
		header("location: homepage.php");
	}
	else echo "Invalid Email or Answer!";
}

?>

</body>
</html>
