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

$query=mysql_query("DELETE from active");
header("location:homepage.php");

?>

</body>
</html>