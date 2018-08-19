<HTML>
	<HEAD>
		
		<link rel="stylesheet" href="home.css"/>
		 <link rel="stylesheet" href="button.css"/>
		 <link rel="stylesheet" href="contactus.css"/>
		 	 <link rel="stylesheet" href="model.css"/>
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
	<div class="image">
		<img src="images/galla.jpeg">
	</div>
	<div class="buybtn">
		<input type=button class="btn" onClick="location.href='buy.php'" value='BOOK NOW'>
	</div>
	<div class="over">
		<h2 class="gal">Emotion And Fun To Drive</h2>
		<p style="font-size:20px;">This baby bull still turns heads. The Gallardo's sharply creased styling and 
		V-10 prove irresistible to drivers who want to be both seen and heard. Spyder 
		and coupe variants include the rear-wheel-drive LP550-2 and all-wheel-drive 
		LP560-4. Only the rear-drive coupe offers a six-speed manual; others feature
		a six-speed automated manual. Several special editions, each with an Italian 
		name like Squadra Corse or Superleggera Edizione Tecnica, are available. </p>
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