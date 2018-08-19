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
   <img id="m3headimg" src="images/bmwM41.png" alt="logo"  />
 <input type=button class="repbtn" onClick="location.href='buy.php'" value='BOOK NOW'>
   <div class="over">
   <h1>2015 BMW M4 Series Buyer's Guide</h1>
   <p>BMW automobiles are perhaps the smoothest cars on the road. They simply do everything with a grace and fluidity you'll be hard pressed to find in any other product—even those renowned for smoothness. And yes, this is even apparent in the brand's lowest priced model for the United States the 2 Series BMWs. Don't let their low rung on the brand's product ladder fool you. The M4 Series shows up with all of the legendary sophistication of BMW's products intact. It also brings quick acceleration, determined roadholding, a supple ride, reasonable fuel economy, and more than a heaping helping of style. If you're looking for a personal luxury car with enjoyable driving manners, a test drive of these delightful automobiles is definitely in order.</p>
   <h1>What makes it move?</h1>
   <p>MW offers two outstanding turbocharged engines for the M4 Series in the United States. The four-cylinder—perfectly suited to the M4 Series platform—is a turbocharged inline 2.0-liter with 240 horsepower and 255 ft-lbs of torque. An eight-speed automatic is the transmission offering. All-wheel drive is available as an option. The six-cylinder is an inline 3.0-liter with 320 horsepower and 330 ft-lbs of torque. Available only with rear drive, buyers can choose between an eight-speed automatic transmission and a six-speed manual at no additional cost.</p>
   <h1>Why buy the 2016 BMW M4?</h1>
   <p>Smoothness and fluidity are the key aspects of the 4 Series BMWs personalities. And yet, when prodded, acceleration, cornering and braking immediately remind you they are essentially four-seat sports cars. The way BMW blends these two attributes in one platform is almost surreal. Ride quality is superb in all conditions and the cars feel all of one piece. The choice of engine is really more a function of how important fuel economy is to you.  With that said, if money is also an issue, driving the turbocharged four will never feel like you settled for something inferior. The engine is smooth, tractable, has a wonderful engine note, and can readily propel the platform with enough determination and velocity to make the experience an interesting one.</p>
   
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
							<th>Colors</th>
						</thead>
						<tbody>
							<tr>
								<td>Fabric Type:</td>
								<td>Leatherette</td>

							</tr>
							<tr>
								<td>Fabric Type 2:</td>
								<td>Plastic</td>

							</tr>
							<tr>
								<td>Roof type:</td>
								<td>Fixed roof</td>

							</tr>
						</tbody>
						<thead>
							<th>Convenience Features</th>
						</thead>
						<tbody>
							<tr>
								<td>12V DC power outlet:</td>
								<td>2</td>

							</tr>
							<tr>
								<td>Audio controls on steering wheel:</td>
								<td>Audio controls</td>

							</tr>
							<tr>
								<td>Center Console:</td>
								<td>Full with covered storage</td>

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