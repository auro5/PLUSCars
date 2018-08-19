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
   <img id="m3headimg" src="images/bmwx61.png" alt="logo"  />
 <input type=button class="repbtn" onClick="location.href='buy.php'" value='BOOK NOW'>
   <div class="over">
   <h1>2016 BMW X6 Buyer's Guide</h1>
   <p>Chided by many critics as the answer to a question nobody asked, BMW's X6 is most certainly a polarizing automobile. If you get it, you love it—if you don't; well there's always the X5 upon which it's based. The X6, with its coupe-like profile, is really aimed at drivers who like the idea of a sport utility vehicle, but also want their ride to exhibit a measure of style. While it is true the sloping roofline diminishes the utility aspect of the equation somewhat, the distinctive design places more emphasis on the sport function. In the final analysis, whether you go X6 or X5 boils down to personal preference. Either way, you'll get one of the most driver-centric sport utility vehicles on the market.</p>
   <h1>What makes it move?</h1>
   <p>BMW's X6 is offered in three model designations; the six-cylinder sDrive35i and xDrive35i; as well as the V8-powered xDrive50i. All three are powered by a choice of two turbocharged engines paired with eight-speed automatic transmissions. The xDrive designations signify all-wheel drive, while the sDrive nomenclature is applied to rear-wheel drive. Thus, rear-wheel drive is offered only with the 300-horsepower, 3.0-liter inline six-cylinder—which also generates 300 ft-lbs of torque. The xDrive50i V8 model displaces 4.4-liters and generates 445 horsepower, along with 480 ft-lbs of torque.</p>
   <h1>Why buy the 2016 BMW X6?</h1>
   <p>Redesigned for the 2015 model year, while it may be difficult to discern at first glance, BMW's X6 is now a bit longer wider and taller. Where the previous model sat only four, the new one will accommodate five passengers. The model's primary attributes (in addition to its more spacious passenger compartment) are engaging handling, exceptionally smooth engines with considerable power, and the quality fit and finish applied to all BMW automobiles. Cargo capacity is 20.5 cubic feet behind the rear seat, and 53.9 cubic feet with the rear seat folded. Key safety features include the latest in electronic driver's aids—among them are lane departure warning, pedestrian detection, and blind spot monitoring. There's also the outstanding driving experience you get with every BMW product.</p>
   
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
								<td>Residual Heat Distribution:</td>
								<td>Residual heat distribution</td>

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
							<th>Audio System</th>
						</thead>
						<tbody>
							<tr>
								<td>Antenna Type:</td>
								<td>Window grid and roof mount</td>

							</tr>
							<tr>
								<td>Audio security system:</td>
								<td>Yes</td>

							</tr>
							<tr>
								<td>MP3 player:</td>
								<td>Yes</td>

							</tr>
							<tr>
								<td>Radio Data System:</td>
								<td>Yes</td>

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
				<li><a href="bmw.html">BMW</a></li>
				
			</ul>
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