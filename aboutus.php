<html>
   <head>
	 <link rel="stylesheet" href="aboutus.css"/>
	 <link rel="stylesheet" href="home.css"/>
	 <link rel="stylesheet" href="button.css"/>
	</head>
	<body>
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
	<b id="welcome" style="margin-left:84%; width=100px;" >Welcome : <i><?php echo $name ?>
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
    			<li><a href="homepage.php">Home</a>
				   
				 </li>  
     			<li><a href="#form">Brands</a>
				  <ul>
				     <li><a href="bmw.php">BMW</a></li>
					 
				  </ul>
				</li>
     			<li><a href="contactus.php">Contact Us</a>
					
				</li>
     			<li><a href="aboutus.php">About Us</a>
				  
				 </li>
				<li><a href="Repairs.php">Services</a>  
				 </li>
				 <li><a href="faq.php">FAQ</a>
				 </li>
  			</ul>
	     </div>
	
	<div class="bgimage">
	
	</div>
	<div class="title">
		<p class="pt">About Us</p>
	
    </div>
	
	 <div class="details">
	<div class="para">
	   <h1>Welcome To Plus Cars</h1>
	    <div class="text">  
			<p style=margin-bottom=10px;>Plus Cars is one of the leading Premium car dealer in the Country.</p>		
			<p>PLUS CARS helps car buyers find the best vehicles to fit their lifestyles. We understand the importance
		   of finding the right car based on individual needs, so we designed user-friendly, customizable search tools.
		   Through PLUS CARS, serious car buyers can now virtually visit our website and view large, high quality photos
		   of vehicles - any time day or night. PLUS CARS is proud to be one of the few dealerships that sells luxury and
		   sports cars. Finding low mileage and accident free vehicles can be difficult, but with our pre-check 
		   procedures we make sure to list the most trusted used cars in the market. We pride ourselves with working extra hours 
		   and go the extra mile for our clients. Traffic vehicle check/passing, registration and after sales services keeps our
		   client database growing on daily basis.
		   </p>
		
		</div>   
	</div>
	   <span class="car-image"><img src="images/e.jpg" alt="image" width="350px" height="215px" />
	   	<p class="caption">PLUS CARS</p></span>
</div>
<div class="rotate">
<div class="flip-container">
	<div class="flipper">
		<div class="front">
			
		</div>
		<div class="back">
		<p>Member #1</p>
		</div>
	</div>

</div>
<div class="flip-container">
	<div class="flipper">
		<div class="front">
			
		</div>
		<div class="back">
		<p>Member #2</p>
		</div>
	</div>

</div>
<div class="flip-container">
	<div class="flipper">
		<div class="front">
			
		</div>
		<div class="back">
		<p>Member #3</p>
		</div>
	</div>

</div>
</div>
<div class="footer" >
		<div class="col1">
			<p class="heading">OUR CARS</p>
			<ul>
				<li><a href="bmw.php">BMW</a></li>
			    <li><a href="lambo.php">Lamborghini</a></li>
			</ul>
		</div>
		<div class="col2">
			<p class="heading">QUICK LINKS</p>
			<ul>
				<li><a href="homepage.php">HOME</a></li>
				<li><a href="aboutus.php">ABOUT US</a></li>
				<li><a href="contactus.php">CONTACT US</a></li>
			    <li><a href="faq.php">FAQ</a></li>
			</ul>
		</div>
		<div class="col3">
			<p class="heading">Our Showroom</p>
				<br>
				<p class="add">
						   Plus Cars<br>
						   Address Line #1<br>
						   Address Line #2<br>
						   
				</P>
		</div>
	</div>
	</div>
</body>
</html>
