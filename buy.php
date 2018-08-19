<html>
<head>
	<link rel="stylesheet" href="home.css"/>
	<link rel="stylesheet" href="buy.css"/>
	<link rel="stylesheet" href="button.css"/>
	<script src="head.js"></script>
	<script>
function check(){
	if(document.form1.user.value=="")
	{   
		alert("Please enter User Name")
		return false;
	}
	if(document.form1.contact.value=="")
	{
		alert("Please enter contact")
		return false;
	}
	else 
		if(document.form1.contact.value.length!=10){
			alert("Please enter valid number")
			return false;
		}
	if(document.form1.address.value=="")
	{   
		alert("Please enter Address")
		return false;
	}
	if(document.form1.city.value=="")
	{
		alert("Please enter City")
		return false;
	}
	if(document.form1.email.value=="")
	{
		var x=document.form1.email.value;
		if (x.indexOf("@")==-1 && x.indexOf(".")==-1)
		{
			alert("It seems you entered an invalid email address.");
			document.form1.email.focus();
		}
	}
	var model=document.form1.model.value;
	var colour=document.form1.colour.value;
	if(model!="BMW M3" && model!="BMW M4" && model!="BMW M5"){
		alert("Model Unavailable");
		return false;
	}
	if(model!="BMW X1" && model!="BMW X3" && model!="BMW X6"){
		alert("Model Unavailable");
		return false;
	}
	if(model!="BMW 340i" && model!="BMW Active Hybrid 3"){
		alert("Model Unavailable");
		return false;
	}
	if(model!="BMW Alpina B7" && model!="BMW 760Li" && model!="BMW 740Li"){
		alert("Model Unavailable");
		return false;
	}
	if(model!="Lamborghini Gallardo" && model!="Lamborghini Aventador" && 
			model!="Lamborghini Sesto Elemento" && model!="Lamborghini Huracan"){
		alert("Model Unavailable");
		return false;
	}
	if(colour!="Black" && colour!="White" && colour!="Blue"){
		alert("Colour Unavailable");
		return false;
	}
	else
		document.form1.submit;	
	} 
}
	</script>
</head>
<body bgcolor="#c9c7bf">
	<div class="container">
	<div class="head" id="nav">
	<?php
	$servername = "localhost"; //your hostname (normally localhost)
	$username = "root"; //database username
	$password = ""; //database password
	$dbname = "login"; //database name
	$conn = mysql_connect($servername, $username, $password) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$query=mysql_query("SELECT Username FROM active");
list($name)= mysql_fetch_row($query);
if($name){
	?>
	<div id="login-btn" class="login login-full-navbar">
	<b id="welcome">Welcome : <i><?php echo $name ?>
	</i></b>
	<b id="logout"><a href="logout.php">LogOut</a></b>
	</div>
	<?php }
else{
	?> 
	<div id="login-btn" class="login login-full-navbar">
  		<input type=button class="login-button" onClick="location.href='login.html'" value='LOGIN'>
  	</div>
  	<?php
	}
?>
		<a href="home.php"><img id="logo" src="images/logo.png" alt="logo" /> </a>
  			<ul id="navbar">
    			<li><a href="home.php">Home</a>
				</li>  
     			<li><a href="#form">Brands</a>
				  <ul>
				     <li><a href="bmw.php">BMW</a></li>
				     <li><a href="lambo.php">LAMBORGHINI</a></li>
				  </ul>
				</li>
     			<li><a href="contact.php">Contact Us</a>
				</li>
     			<li><a href="aboutus.php">About Us</a> 
				</li>
  			</ul>
	</div>
	<div class="body"></div>
	<div class="cont">
		<h2>BOOK NOW!</h2>
	</div>
	<div class="order" id="form">
		<p class="txt">Provide Personal Details</p>
			<form action="details.php" method="post" class="personal" name="form1">
					<input type="text" placeholder="Name" name="user" >
					<br>
					<input type="number" placeholder="Contact" name="contact"><br>
					<input type="text" placeholder="Address Line 1" name="address">
					<br>
					<input type="text" placeholder="City" name="city">
					<br>
					<input type="email" placeholder="Email" name="email"><br>
					<p class="txt">Provide Booking Details</p>
					<input id="design" list="models" placeholder="Model name" name="model">
  					<datalist id="models">
    				<option value="BMW M3">
    				<option value="BMW M4">
    				<option value="BMW M5">
					<option value="BMW X1">
    				<option value="BMW X3">
    				<option value="BMW X6">
    				<option value="BMW 340i">
    				<option value="BMW Active Hybrid 3">
    				<option value="BMW Alpina B7">
    				<option value="BMW 760Li">
    				<option value="BMW 740Li">
    				<option value="Lamborghini Gallardo">
    				<option value="Lamborghini Aventador">
    				<option value="Lamborghini Sesto Elemento">
    				<option value="Lamborghini Huracan">
  					</datalist><br>
					<input id="design" list="colour" placeholder="Colour" name="colour">
  					<datalist id="colour">
    				<option value="Black">
					<option value="White">
    				<option value="Blue">
  					</datalist><br>
					<input type="submit" placeholder="Submit" name="submit"
					onclick="return check()">

			</form>
		</div>
	<div class="footer" >
		<div class="col1">
			<p class="heading">OTHERS</p>
			<ul>
				<li><a href="bmw.php">BMW</a></li>
				<li><a href="buy.php">Book Now</a></li>
			</ul>
		</div>
		<div class="col2">
			<p class="heading">QUICK LINKS</p>
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="aboutus.php">ABOUT US</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
			</ul>
		</div>
		<div class="col3">
			<p class="heading">Our Showroom</p>
				<br>
				<p class="add">
						   PLUS CARS<br>
						   K J Somaiya Campus<br>
						   Vidyavihar - East<br>
						   Mumbai-India<br>
						   +91-9645852541
				</p>
		</div>
	</div>
</div>
</body>
</html>