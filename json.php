<HTML>
	<HEAD>
		
		<link rel="stylesheet" href="home.css"/>
		 <link rel="stylesheet" href="button.css"/>
		 <link rel="stylesheet" href="contactus.css"/>
		 	 <link rel="stylesheet" href="bmw.css"/>
		
	</HEAD>
<body>
<div class="container">
	<div class="head" id="nav" style="background-color : rgba(71,71,71,1)!important;">
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
	<b id="welcome" style="margin-left:84%; width=100px;" >Welcome : <i><?php echo $name ?> 	</i></b>
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
  		<img id="logo" src="images/logo.png" alt="logo"  />
  			<ul id="navbar">
    			<li><a href="homepage.html">Home</a>
				   
				 </li>  
     			<li><a href="#form">Brands</a>
				  <ul>
				     <li><a href="bmw.html">BMW</a></li>
					
				  </ul>
				</li>
     			<li><a href="contactus.html">Contact Us</a>
					
				</li>
     			<li><a href="aboutus.html">About Us</a>
				  
				 </li>
  			</ul>
	</div>
	<div class="bgimage">
<img src="images/1.jpg" width="1263px" height="auto">
	</div>
	<div class="bmwcontent">
<div class="b1">
	<img src="images/2.jpg">
</div>

	</div>

<div class="footer" >
		<div class="col1">
			<p class="heading">OUR CARS</p>
			<ul>
				<li><a href="bmw.html">BMW</a></li>
				
			</ul>
		</div>
		<div class="col2">
			<p class="heading">QUICK LINKS</p>
			<ul>
				<li><a href="home.html">HOME</a></li>
				<li><a href="aboutus.html">ABOUT US</a></li>
				<li><a href="contactus.html">CONTACT US</a></li>
			   
			</ul>
		</div>
		<div class="col3">
			<p class="heading">Our Showroom</p>
				<br>
				<p class="add">
						   Plus Cars<br>
						   K J Somaiya Campus<br>
						   Vidyavihar - East<br>
						   Mumbai-India<br>
						   +91-9645852541
				</P>
		</div>
	</div>
</div>
</body>
</html>