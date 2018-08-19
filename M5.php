<html>
   <head>
	 <link rel="stylesheet" href="aboutus.css"/>
	 <link rel="stylesheet" href="home.css"/>
	 <link rel="stylesheet" href="button.css"/>
	 <link rel="stylesheet" href="faq.css"/>
	 <link rel="stylesheet" href="M3.css"/>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 <script src="faq.js"></script>
	 <style type="text/css">
#table-2 {
	border: 1px solid #e3e3e3;
	background-color: #f2f2f2;
        width: 100%;
	border-radius: 6px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
}
#table-2 td, #table-2 th {
	padding: 5px;
	color: #333;
}
#table-2 thead {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	padding: .2em 0 .2em .5em;
	text-align: left;
	color: #4B4B4B;
	background-color: #C8C8C8;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#e3e3e3), color-stop(.6,#B3B3B3));
	background-image: -moz-linear-gradient(top, #D6D6D6, #B0B0B0, #B3B3B3 90%);
	border-bottom: solid 1px #999;
}
#table-2 th {
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	font-size: 17px;
	line-height: 20px;
	font-style: normal;
	font-weight: normal;
	text-align: left;
	text-shadow: white 1px 1px 1px;
}
#table-2 td {
	line-height: 20px;
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	font-size: 14px;
	border-bottom: 1px solid #fff;
	border-top: 1px solid #fff;
}
#table-2 td:hover {
	background-color: #fff;
}
</style>
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
    			<li><a href="home new slider.php">Home</a>
				   
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
   <img id="m3headimg" src="images/bmwM51.png" alt="logo"  />
   <input type=button class="repbtn" onClick="location.href='buy.php'" value='BOOK NOW'>
   <div class="over">
   <h1>2016 BMW M5 Buyer's Guide</h1>
   <p>Solidly holding down the mid-size position in the BMW lineup, the insanely popular BMW 5 Series has enough variants to almost be a brand unto itself. Offered with a choice of four powertrains (including diesel and hybrid), as well as two body styles, the BMW 5 Series is remarkably versatile. One of the first mid-size luxury sedans to offer the driving dynamics of a sports car with the comfort and spaciousness of a well appointed four-door, the BMW 5 Series is recognized as the benchmark for the luxury sport sedan segment. Helping to ensure the model’s dominance are its classy appearance, and exceptionally comfortable ride quality. Highly regarded, the 5 Series models also offer a four-door hatchback, adding considerable utility to the list of attributes.</p>
   <h1>What makes it move?</h1>
   <p>The base engine is a 240-horsepower turbocharged four with 260 ft-lbs of torque. The upgrade is a 300-horsepower turbocharged 3.0-liter inline six with 300 ft-lbs of torque. The diesel is a 255-horsepower 3.0-liter turbocharged straight six with 413 ft-lbs of torque. The 335-horsepower hybrid teams an electric motor with a 3.0-liter turbocharged inline six for 332 ft-lbs. The 445-horsepower turbocharged 4.4-liter V8 makes 480 ft-lbs. Standard across the board is an eight-speed automatic coupled with rear drive. All-wheel drive is offered with all except the hybrid.</p>
   <h1>Why buy the 2016 BMW M3?</h1>
   <p>Few cars offer the prestige of BMW’s 5 Series. This is as much a function of the way it operates as it is public perception. Infinitely respectable, the sophisticated BMW 5 Series delivers driving pleasure far exceeding all of its peers in the segment. It really is the one all of the others are measured by. The styling is sleek and the interior accoutrements are absolutely cutting edge—and housed in a tastefully understated package. First and foremost, the BMW 5 Series caters to the needs of the driver, and yet the needs of passengers are also well attended to. If you're looking for a car capable of pretty much doing it all, the BMW 5 Series goes a long way toward fulfilling your expectations.</p>
   
   <div class="question">SPECS</div>
				<div class="answer">
				<table id="table-2">
						<thead>
							<th>Airbags</th>
						</thead>
						<tbody>
							<tr>
								<td>Driver Airbag:</td>
								<td>Yes</td>

							</tr>
							<tr>
								<td>Head airbags:</td>
								<td>Yes</td>

							</tr>
							<tr>
								<td>Passenger Airbag:</td>
								<td>Dual</td>

							</tr>
						</tbody>
						<thead>
							<th>Comfort Features</th>
						</thead>
						<tbody>
							<tr>
								<td>Beverage cooler:</td>
								<td>Console</td>

							</tr>
							<tr>
								<td>Cargo area light:</td>
								<td>Cargo area light</td>

							</tr>
							<tr>
								<td>Center console trim:</td>
								<td>Genuine wood/metal-look</td>

							</tr>
						</tbody>
						<thead>
							<th>Brakes</th>
						</thead>
						<tbody>
							<tr>
								<td>Braking assist:</td>
								<td>Braking assist</td>

							</tr>
							<tr>
								<td>Front brakes:</td>
								<td>Ventilated disc</td>

							</tr>
						</tbody>
						<thead>
							<th>Safety and Security</th>
						</thead>
						<tbody>
							<tr>
								<td>4 wheel disc brakes:</td>
								<td>Yes</td>

							</tr>
							<tr>
								<td>ABS brakes:</td>
								<td>No</td>

							</tr>
							<tr>
								<td>Brake assist:</td>
								<td>No</td>

							</tr>
							<tr>
								<td>Panic alarm:</td>
								<td>No</td>

							</tr>
							<tr>
								<td>Security system:</td>
								<td>Yes</td>

							</tr>
							<tr>
								<td>Traction control:</td>
								<td>Tes</td>

							</tr>
							
						</tbody><thead>
							<th>Suspension/Handling</th>
						</thead>
						<tbody>
							<tr>
								<td>Front tires:</td>
								<td>225/45VR17.0</td>

							</tr>
							<tr>
								<td>Rear tires:</td>
								<td>225/45VR17.0</td>

							</tr>
							<tr>
								<td>Wheel size:</td>
								<td>17"</td>

							</tr>
						</tbody>
					</table>
				
				
				
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
				<li><a href="home.html">HOME</a></li>
				<li><a href="aboutus.html">ABOUT US</a></li>
				<li><a href="contactus.html">CONTACT US</a></li>
			    <li><a href="faq.html">FAQ</a></li>
			</ul>
		</div>
		<div class="col3">
			<p class="heading">Our Showroom</p>
				<br>
				<p class="add">
						   Plus Cars<br>
						   K J Somaiya Campus<br>
						   Vidyavihar - East<br>
						   Mumbai-India
				</P>
		</div>
	</div>
</div>
</body>
</html>