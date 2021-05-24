<?php 
session_start();
?>
<html>
<head>
	<title>MOBILE</title> 
	<link rel="stylesheet" type="text/css" href="../css/mobile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
	<div class="nav">
		<ul>
			<li class="active"><a href="HOME.php">HOME</a></li>
			<li><a href="SUBSCRIBE.php">Subscribe</a></li>
			<li><a href="CONTACT.php">Contact</a></li>
			<li><a href="ABOUT.php">About</a></li>
			<div class="dropdown">
  <button class="dropbtn">Category <i class="fa fa-angle-down"></i></button>
  <div class="dropdown-content">
    <a href="amoled.php">AMOLED</a>
    <a href="avenger1.php">AVENGERS</a>
    <a href="pattern.php">PATTERN</a>
  </div>
</div>
			<li><a href="index.php"><?php if(!isset($_SESSION['Profile'])){} 
		   else{ echo "Premium"; }
		   ?></a></li>
			<li><a class="side" href="SIGNIN.php">  
    <?php
    if(!isset($_SESSION['Profile'])){ echo "Sign in"; } 
		else{ echo  "Welcome ".$_SESSION['Profile']; }
		?>  
		</a></li> 
    </ul>
  </div> 
	<center> 
		<br><br>
			<main>
			<div class="box">
 
				<a href="../wallpaper\mobile\hd.jpg" download>
				<img src="../wallpaper\mobile\hd.jpg">	
				</a>			
			
		    	<a href="../wallpaper\mobile\tree.jpg" download>
		    	<img src="../wallpaper\mobile\tree.jpg">	
		    	</a>		    			
			
				<a href="../wallpaper\mobile\flower.jpg" download>
				<img src="../wallpaper\mobile\flower.jpg">	
				</a>			
			
				<a href="../wallpaper\mobile\water.jpg" download>
				<img src="../wallpaper\mobile\water.jpg">	
				</a>


				<a href="../wallpaper\mobile\hot air.jpg" download>
				<img src="../wallpaper\mobile\hot air.jpg">	
				</a>

				<a href="../wallpaper\mobile\bullet.jpg" download>
				<img src="../wallpaper\mobile\bullet.jpg">	
				</a>

				<a href="../wallpaper\mobile\road.jpg" download>
				<img src="../wallpaper\mobile\road.jpg">	
				</a>

				<a href="../wallpaper\mobile\wat.jpg" download>
				<img src="../wallpaper\mobile\wat.jpg">	
				</a>

				<a href="../wallpaper\mobile\grinch.jpg" download>
				<img src="../wallpaper\mobile\grinch.jpg">	
				</a>

				<a href="../wallpaper\mobile\halfmoon.jpg" download>
				<img src="../wallpaper\mobile\halfmoon.jpg">	
				</a>

				<a href="../wallpaper\mobile\birdview.jpg" download>
				<img src="../wallpaper\mobile\birdview.jpg">	
				</a>

				<a href="../wallpaper\mobile\wave.jpg" download>
				<img src="../wallpaper\mobile\wave.jpg">	
				</a>

		    </div>
<br>
<br>
<br>
		    </main>
		</center>
	</header>
</body>
</html>
