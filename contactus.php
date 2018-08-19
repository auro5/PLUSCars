

<HTML>
	<HEAD>
		
		<link rel="stylesheet" href="home.css"/>
		 <link rel="stylesheet" href="button.css"/>
		 <link rel="stylesheet" href="contactus.css"/>
		
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
	<div class="content">
		<div class="maps">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
				<div style="overflow:hidden;height:550px;width:75%;float:right;margin-top:0px;">
					<div id="gmap_canvas" style="height:505px;width:100%; ">
					</div>
					<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
				</div>
					<script type="text/javascript">
				 function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(19.,72.89955020503237),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.07353247717196, 72.89955020503237)});infowindow = new google.maps.InfoWindow({content:"<b>Plus Cars</b>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
				 	</script>
		</div>
			<div class="show">
				<p class="showroom">Our Showroom</p>
			</div>
			<div class="details">
				<P class="address">	Plus Cars<br>
						   Address Line #1<br>
						   Address Line #2<br>
							000-000-000
				</P>
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