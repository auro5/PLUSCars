<html>
   <head>
	 <link rel="stylesheet" href="aboutus.css"/>
	 <link rel="stylesheet" href="home.css"/>
	 <link rel="stylesheet" href="button.css"/>
	 <link rel="stylesheet" href="faq.css"/>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 <script src="faq.js"></script>
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
		 <div class="headfaq">
		 <p>FAQ</p>
		 </div>
		 <div class="bag">
		<!-- <img src="images/grey.jpeg"/>-->
		 <div class="content">
		 
				<div class="question">Q. WHAT IS THE SHOPPING PROCESS?</div>
				<div class="answer">First, figure out what you want in a car, such as body type and exterior color, along with the features you desire, like fuel economy. After you find the car that best suits your needs and budget, click on the buy now button which will take you to the gateway where you can finalize your purchases.</div>


				<div class="question">Q. DO YOU HAVE A SHOP WHERE I CAN BRING MY CAR TO SERVICE?</div>
				<div class="answer">Our mechanics come to you and provide services at the convenience of your home or office. We also have a shop location where you can bring your car.</div>

				<div class="question">Q. WHAT VEHICLE MAKES ARE AVAILABLE?</div>
				<div class="answer">Currently we offer a wide variety of makes and models, and we're always expanding our fleet of vehicles. If you're looking for a specific model and we don't offer it, we will be happy to find you the closest equivalent.</div>
		 
				<div class="question">Q. WHAT KINDS OF WARRANTIES ARE AVAILABLE?</div>
				<div class="answer">You can buy with confidence. Most of our vehicles carry the factory warranty. Additionally, there are extended warranties, as well as other products, available for purchase to enhance your ownership experience. </div>
		 
				<div class="question">Q. ARE THE POSTED PRICES NEGOTIABLE?</div>
				<div class="answer">No. Every vehicle is already posted with a no-haggle price. With IFS, there's no sales pressure and no need to negotiate. The price we post is the final price. Our goal is to make your purchase easy and enjoyable.</div>

				<div class="question">Q. ARE THE PRICES LISTED THE REAL SALE PRICES?</div>
				<div class="answer">Yes. All vehicles listed on the site have been specially priced with a no-haggle price tag. We've eliminated the need to negotiate, so you're free to review product specifications and make a purchase without having to waste time haggling.</div>		
		
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