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
   <img id="m3headimg" src="images/bmw740li.png" alt="logo"  />
 <input type=button class="repbtn" onClick="location.href='buy.php'" value='BOOK NOW'>
   <div class="over">
   <h1>2016 BMW 7 Series Buyer's Guide</h1>
   <p>For the 2016 model year, BMW is introducing an all-new version of its flagship 7 Series with absolutely cutting edge technology. For the first time ever, drivers will be able to reject a phone call by literally waving it off. That's right, the new 7 Series recognizes hand gestures. It's also capable of parking itself—with the driver standing outside of the car. As the top BMW model, the 7 Series has always been where the company's newest tech debuted. The monitor and dial controller system found in practically every car on the road today debuted in BMW's 7 Series. While obviously too big, too expensive, and too specialized to be considered a popular seller, the luxury model does remarkably well within its competitive set.</p>
   <h1>What makes it move?</h1>
   <p>A pair of exceptionally powerful engines is offered at launch. A 320-horsepower turbocharged 3.0-liter inline six-cylinder capable of producing 330 ft-lbs of torque powers the rear-wheel drive 740i. This engine is mated to an eight-speed automatic transmission, which communicates with the BMW 7 Series navigation system to predict upshifts and downshifts based on the nature of the terrain. The 750i xDrive gets a 445-horsepower twin-turbocharged 4.4-liter V8 with 480 ft-lbs of torque. The BMW’s brilliant all-wheel drive powertrain also uses the smart eight-speed automatic transmission.</p>
   <h1>Why buy the 2016 BMW 7 Series?</h1>
   <p>Features like comfort access for all four doors and the trunklid are standard. This means the doors are soft close and merely waving your foot under the rear bumper opens the trunk. The 2016 BMW 7 Series Ultimate Benefits package provides priority service appointments, pickup and delivery of the car, a comparable service loaner, and 24/7 concierge service. With the Panoramic Sky Lounge LED Roof, light emitted by LED modules spreads across the roof and is captured by etchings in the glass to create the effect of a starlit sky. The industry's largest head-up display features road speed information, speed limits, overtaking restrictions, Check Control messages, status, and warning messages from the car’s other assistance systems, turn-by-turn directions, as well as telephone and entertainment menus.</p>
   
   <div class="question">SPECS</div>
				<div class="answer">
				<table id="table-2">
						<thead>
							<th>Air Conditioning</th>
						</thead>
						<tbody>
							<tr>
								<td>Air filtration:</td>
								<td>Interior air filtration</td>

							</tr>
							<tr>
								<td>Front air conditioning:</td>
								<td>Automatic</td>

							</tr>
							<tr>
								<td>Front air conditioning zones:</td>
								<td>Dual</td>

							</tr>
						</tbody>
						<thead>
							<th>AirBags</th>
						</thead>
						<tbody>
							<tr>
								<td>Driver Airbag:</td>
								<td>Yes</td>

							</tr>
							<tr>
								<td>Knee airbags:</td>
								<td>Driver and passenger</td>

							</tr>
							<tr>
								<td>Passenger Airbag:</td>
								<td>Yes</td>

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