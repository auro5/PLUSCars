<html>
<head>
	<link rel="stylesheet" href="slider.css"/>
	<link rel="stylesheet" href="home.css"/>
	<link rel="stylesheet" href="button.css"/>
	
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
       
		height:650px;
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
		height:120px; 
		width:100%;
		background:rgba(0,0,0,0.5);
		position:absolute;
		margin-top:-120px;
		z-index:1000;
		text-align:center;
		opacity:0;
		transition:all .2s ease-in-out 0s;
        z-index: 20;
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
		height:100px;
		width:200px;
		position:absolute;
		left:0;
		top:320px;
		z-index:1;
		}
		#prev_c img {
			height:120px;
			width:120px;
			position:absolute;
			top:0;
			bottom:0;
			left:0;
			margin:auto 0px;
			}
		
	#next_c {
		height:100px;
		width:200px;
		position:absolute;
		right:0;
		top:320px;
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
	<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->

</head>
<body bgcolor="#f0f3f5"> 

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
					   <li><a href="lambo.php">LAMBORGHINI</a></li>
				  </ul>
				</li>
     			<li><a href="contactus.php">Contact Us</a>
					
				</li>
     			<li><a style="margin-left:20px;" href="aboutus.php">About Us</a>
				  
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
        <div id="next_c"><img id="next" src="images/next1.svg"/></div>


	<div class="repairs">
			<h2 class="primary">Need Help with Car Repair ?</h2>
			<p>Maximise the lifespan and value of your car with regular car servicing at PLUS CARS.</p>
			
				<input type=button class="repbtn" onClick="location.href='contactus.php'" value='Enter Repair Shop'>
			
	</div>
	<div class="marq">
		<marquee direction="right" scrollamount="15" onmouseover="this.stop();" 
		onmouseout="this.start();">
			<img src="images/bmw.png" />
			<img src="images/jaguar.png" />
			<img src="images/Lamborghini Logo.png" />
			<img src="images/porsche.png" />
		</marquee>
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


