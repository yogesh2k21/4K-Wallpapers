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
    <a href="nature1.php">NATURE</a>
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
 
				<a href="../wallpaper\mobile\blackpanther.jpg" download>
				<img src="../wallpaper\mobile\blackpanther.jpg">	
				</a>
			 
				<a href="../wallpaper\mobile\car.jpg" download>
				<img src="../wallpaper\mobile\car.jpg">	
				</a>			
			
				<a href="../wallpaper\mobile\hd.jpg" download>
				<img src="../wallpaper\mobile\hd.jpg">	
				</a>			
			
				<a href="../wallpaper\mobile\pubg.jpg" download>
				<img src="../wallpaper\mobile\pubg.jpg">	
				</a>			
			
				<a href="../wallpaper\mobile\pubg2.jpg" download>
				<img src="../wallpaper\mobile\pubg2.jpg">	
				</a>			
			
				<a href="../wallpaper\mobile\blue night.jpg" download>
				<img src="../wallpaper\mobile\blue night.jpg">
				</a>			
			
			    <a href="../wallpaper\mobile\google.jpg" download>
			    <img src="../wallpaper\mobile\google.jpg">
		        </a>		    
		    
		    	<a href="../wallpaper\mobile\tree.jpg" download>
		    	<img src="../wallpaper\mobile\tree.jpg">	
		    	</a>		    
			
				<a href="../wallpaper\mobile\man.jpg" download>
				<img src="../wallpaper\mobile\man.jpg">	
				</a>			
			
				<a href="../wallpaper\mobile\allblack.jpg" download>
				<img src="../wallpaper\mobile\allblack.jpg">	
				</a>			
			
				<a href="../wallpaper\mobile\flower.jpg" download>
				<img src="../wallpaper\mobile\flower.jpg">	
				</a>			
			
				<a href="../wallpaper\mobile\water.jpg" download>
				<img src="../wallpaper\mobile\water.jpg">	
				</a>

				<a href="../wallpaper\mobile\green.jpg" download>
				<img src="../wallpaper\mobile\green.jpg">	
				</a>

				<a href="../wallpaper\mobile\bp.jpg" download>
				<img src="../wallpaper\mobile\bp.jpg">	
				</a>

				<a href="../wallpaper\mobile\marshmello.jpg" download>
				<img src="../wallpaper\mobile\marshmello.jpg">	
				</a>

				<a href="../wallpaper\mobile\hot air.jpg" download>
				<img src="../wallpaper\mobile\hot air.jpg">	
				</a>

				<a href="../wallpaper\mobile\maha.jpg" download>
				<img src="../wallpaper\mobile\maha.jpg">	
				</a>

				<a href="../wallpaper\mobile\bullet.jpg" download>
				<img src="../wallpaper\mobile\bullet.jpg">	
				</a>

				<a href="../wallpaper\mobile\panda.jpg" download>
				<img src="../wallpaper\mobile\panda.jpg">	
				</a>

				<a href="../wallpaper\mobile\panda2.jpg" download>
				<img src="../wallpaper\mobile\panda2.jpg">	
				</a>

				<a href="../wallpaper\mobile\panda3.jpg" download>
				<img src="../wallpaper\mobile\panda3.jpg">	
				</a>

				<a href="../wallpaper\mobile\mask.jpg" download>
				<img src="../wallpaper\mobile\mask.jpg">	
				</a>

				<a href="../wallpaper\mobile\cpu.jpg" download>
				<img src="../wallpaper\mobile\cpu.jpg">	
				</a>

				<a href="../wallpaper\mobile\road.jpg" download>
				<img src="../wallpaper\mobile\road.jpg">	
				</a>

				<a href="../wallpaper\mobile\code.jpg" download>
				<img src="../wallpaper\mobile\code.jpg">	
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
					
				<a href="../wallpaper\mobile\grey.jpg" download>
				<img src="../wallpaper\mobile\grey.jpg">	
				</a>

				<a href="../wallpaper\mobile\hexa.jpg" download>
				<img src="../wallpaper\mobile\hexa.jpg">	
				</a>

				<a href="../wallpaper\mobile\wave.jpg" download>
				<img src="../wallpaper\mobile\wave.jpg">	
				</a>

		    </div>
<br>
		    </main>
		</center>
	</header>
</body>
</html>
