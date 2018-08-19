<html>
<head>
	<link rel="stylesheet" href="slider.css"/>
	<link rel="stylesheet" href="home.css"/>
	<link rel="stylesheet" href="button.css"/>
	<link rel="stylesheet" href="repairs.css"/>

	<script src="head.js"></script>
    <script src="jquery-2.1.3.min.js"></script>
    <script src="cycle2.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

	    <style type="text/css">
	*{
		margin:0;
		padding:0;
	}
	
	#slideshow {
       
		height:100%;
		width:100%;
        z-index: 0;
		}
	#slideshow img {
		height:100%;
		width:100%;
		position: absolute;
		z-index:10;
		min-width:100%;
		min-height:100%;
        z-index: 0;
		}
	#pager {
		position:relative;
		top:-120px;
		height:120px; 
		width:100%;
		background:rgba(0,0,0,0.5);
		
		bottom:5%;
		z-index:1000;
		text-align:center;
		opacity:0;
		transition:all .2s ease-in-out 0s;
        z-index: 0;
		}
	#pager:hover {
		opacity:1;
		}
	#pager img {
		margin: 10px 5px;
		opacity:0.3;
		transition:all .3s ease-in-out 0s;
		}
	#pager img:hover {
		opacity:1;
		transform:scale(1.05);
		z-index:100;
		}
	#prev_c {
		height:100%;
		width:200px;
		position:absolute;
		left:0;
		top:0;
		z-index:1;
		}
		#prev_c img {
			height:120px;
			width:120px;
			position:absolute;
			top:-500px;
			bottom:0;
			left:0;
			margin:auto 0px;
			}
		
	#next_c {
		height:100%;
		width:200px;
		position:absolute;
		right:0;
		top:-250px;
		z-index:1;
		}
		#next_c img {
			height:120px;
			width:120px;
			position:absolute;
			top:0;
			bottom:0;
			right:0;
			margin:auto 0px;
			}
		#next #prev { visibility:hidden;}
		#next,#prev:hover {
			cursor:pointer;
			}
		#next_c,#prev_c:hover #next,#prev { visibility:visible;}
		
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
		 
		 <div id="slideshow" class="cycle-slideshow" 
 data-cycle-fx="fade" 
 data-cycle-manual-fx="scrollHorz" 
 data-cycle-pager-fx = "fade" 
 data-cycle-manual-speed="400"
 data-cycle-prev="#prev"  	
 data-cycle-next="#next"
 data-cycle-speed="600"  
 data-cycle-timeout="3000" 
 data-cycle-pager = "#pager" 
 data-cycle-pager-template="<a href='#'><img src='{{src}}' width=150 height=100></a>"
     > 
      
        <img src="images/a.jpg" id="intro_img"/>
        <img src="images/b.jpg" id="intro_img"/>
        <img src="images/c.jpg" id="intro_img"/>
         <img src="images/d.jpg" id="intro_img"/>
         <img src="images/e.jpg" id="intro_img"/>
         <img src="images/f.jpg" id="intro_img"/>
         <img src="images/g.jpg" id="intro_img"/>
        </div>
    <div id="pager"></div>
    <div id="prev_c"><img id="prev" src="images/prev1.svg"/>
    </div>
        <div id="next_c"><img id="next" src="images/next1.svg"/>
		</div>
		
		
	<div class="welcome">

			<h2 class="primary">Welcome There!</h2>
						<hr style="display: block;
						margin-top: -1.2em;
						margin-left: 3em;
						width:35%;">
						<hr style="display: block;
						margin-top: -0.4em;
						margin-left: 51em;
						width:35%;">

				<div class="para1">
						<h1>WE HAVE THE TOOLS TO PINPOINT<br>
							THE PROBLEM!<h1>
						<div class="text">  
						<p>Keeping a well-maintained vehicle is paramount to your safety. That is why our team of nearly 500 professional technicians are ready to make your vehicle safe and reliable. Our repair shop is equipped with the best maintenance tools, equipments, and golden hands of our team!</p>
						</div></div>
						<span class="car-image"><img src="images/REP1.png" id="rep_img1"/></span>
					<div class="scsection">
					<div class="para2">
					<p><b>SAVE MONEY</b> and <b>TIME with Discount Specials and Auto Service Coupons <br>ONLY at <b>PLUS Cars</p>
					</div>
					</div>
					<div class="parent">
						  <h2 style="margin-top:20px;">Our Service</h2>
							<hr style="display: block;
							margin-top: -1.2em;
							margin-left: 3em;
							width:35%;">
							<hr style="display: block;
							margin-top: -0.4em;
							margin-left: 51em;
							width:35%;">
						<div class="child1">		
								<div class="battery"><img src="images/Battery.png" id="rep_img1"/><div class="abc"><h3>Battery</h3><br><p>Don’t have time to go to a car battery store to have your battery changed?Worry no more!PLUS Cars Auto Repair is here to save the day</p></div></div>
								<div class="oil"><img src="images/Oil1.png" id="rep_img1"/><div class="abc"><h3>Oil Change</h3><br><p>We dont just change the oil. We prevent your car from running the wrong way</p></div></div>
								<div class="trans"><img src="images/Trans.png" id="rep_img1"/><div class="abc"><h3>Transmission Fluid</h3><br><p>We offer wide range of both automatic and manual transmission fluid products</p></div></div>
						</div>
						<div class="child2">
								<div class="engine"><img src="images/Engine.png" id="rep_img1"/><div class="abc"><h3>Engine Repair</h3><br><p>We are ready to service your car’s engine and maintain vehicle performance</p></div></div>
								<div class="lastrep"><img src="images/lastrep.png" id="rep_img1"/><div class="abc"><h3>Brake Service</h3><br><p>Our car repair company performs nearly half a million brake repairs a year</p></div></div>
								<div class="tyre"><img src="images/Tyres.png" id="rep_img1"/><div class="abc"><h3>Tyre Balance</h3><br><p>Correct wheel balance on your vehicle is too important to our team of mechanics</p></div></div>
						</div>
					</div>
					<h2 style="margin-top:-200px;">Customer Reviews</h2>
						<hr style="display: block;
						margin-top: -1.2em;
						margin-left: 3em;
						width:35%;">
						<hr style="display: block;
						margin-top: -0.4em;
						margin-left: 51em;
						width:35%;">
						
					<div class="review">
					<div class="para3">
								<p><b>Thank you for the excellent job your team is doing fixing my car. I use their services regularly, because I know that these guys know exactly what they are doing.<b></p>
								<img src="images/face1.jpg" />
								<p> - David Sean</p>
								<br>
								<br>
								<p><b>Thank you for the excellent job your team is doing fixing my car. I use their services regularly, because I know that these guys know exactly what they are doing.<b></p>
								<img src="images/face2.jpg" />
								<p> - Paul Mike</p>
								<br>
								<br>
								<p><b>Thank you for the excellent job your team is doing fixing my car. I use their services regularly, because I know that these guys know exactly what they are doing.<b></p>
								<img src="images/face3.jpg" />
								<p> - Robert Jones</p>
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
