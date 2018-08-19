<HTML>
	<HEAD>
		
		<link rel="stylesheet" href="home.css"/>
		 <link rel="stylesheet" href="button.css"/>
		 <link rel="stylesheet" href="contactus.css"/>
		 	 <link rel="stylesheet" href="lambo.css"/>
		 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
	<div class="bgimage">
		<img src="images/L.jpg"></img>
	</div>
	<div id="data">
	<p class="shead">MODELS</p>
		<p class="sdetails">
		adasddasdasd
		asddasdasd
		asdasdassdasdadassdasddasddsasssssssssssssssssssssssssssssssssssssssssssssssssssadadadadasdasdasd</p>
	</div>
	<hr></hr>
	<div id="models">
		<div class="gala">
			<section class="text">
			<p><a href="galla.php">Gallardo</a></p></section>
		<img id="model" src=images/gala.jpg>
		</div>
        <div class="av">
			<section class="textx">
			<p><a href="ave.php">Aventador</a></p></section>
		<img id="model" src=images/Av.jpg>
		</div>
        <div class="sesto">
			<section class="text">
			<p><a href="ses.php">Sesto</a></p></section>
		<img id="model" src=images/sesto.jpg>
		</div>
        <div class="hura">
			<section class="text7">
			<p><a href="hura.php">Huracan</a></p></section>
		<img id="model" src=images/hura.jpg>
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