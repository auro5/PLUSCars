<html>
  <head>
    <link rel="stylesheet" href="slider.css"/>
    <link rel="stylesheet" href="home.css"/>
    <link rel="stylesheet" href="button.css"/>
      <link rel="stylesheet" href="Mseries.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="head.js"></script>
      <script src="toggle.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
          <img id="logo" src="images/logo.png" alt="logo"/>
            <ul id="navbar">
              <li><a href="homepage.php">Home</a>
               
             </li>  
              <li><a href="#form">Brands</a>
              <ul>
                 <li><a href="bmw.php">BMW</a></li>
				   <li><a href="lambo.php">Lamborghini</a></li>
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
        <div class="info">
            <div class="Mhead">3 SERIES</div>
            <div class="Mdetails">The M from M GmbH has always been a sure way of identifying genuine sports cars.The current M automobiles continue to extend this hallmark: the BMW M3 Sedan, the BMW M4 Coupe, the BMW M4 Convertible, the BMW M5 Sedan, the BMW M6 as Coupe, Gran Coupe and Convertible as well as the BMW X5 M and BMW X6 M.</div>
        </div>
        <hr></hr>
        <div class="modelhead">
          <p>MODELS</p>
          <hr></hr>
        </div>
        
        <div class="row car-model">
          <div class="row">
            <div class="col-md-6">
              <img class="car-img" src="images/bmw3340.png">
            </div>
            <div class="car-details col-md-6">
				<div class="row text-details">BMW 3 340i</div>
			  <a class="toggler text-details" href="3340.php" style="text-decoration:none;">Click to get more info</a>
            </div>
          </div>
          <div class="row text-to-toggle">
            <span class="more-details" id="detail101426487"></span>
          </div>
        </div>
        <div class="row car-model">
          <div class="row">
            <div class="col-md-6">
              <img class="car-img" src="images/bmwactive3.png">
            </div>
            <div class="car-details col-md-6">
              <div class="row text-details">BMW Activehybrid 3</div>
			  <a class="toggler text-details" href="active3.php" style="text-decoration:none;">Click to get more info</a>
            </div>
          </div>
          <div class="row text-to-toggle">
            <span class="more-details" id="detail200481163"></span>
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