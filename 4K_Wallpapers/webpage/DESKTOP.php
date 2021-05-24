<?php 
session_start();
?>
<html>
<head>
<title>DESKTOP</title>
  <link rel="stylesheet" type="text/css" href="../css/desktop.css">
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
    <a href="car.php">CARS</a>
    <a href="bike.php">BIKES</a>
    <a href="avenger.php">AVENGERS</a>
    <a href="nature.php">NATURE</a>
    <a href="game.php">GAMES</a>
    <a href="tech.php">TECHNOLOGY</a>
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
<br>
<center>
<main> 
            <div class="box">

            <a href="../wallpaper\desktop\dbz.jpg" download>
       	    <img src="../wallpaper\desktop\dbz.jpg">
            </a>

            <a href="../wallpaper\desktop\aquaman.jpg" download>
       	    <img src="../wallpaper\desktop\aquaman.jpg"> 
            </a>

            <a href="../wallpaper\desktop\blackpanther.jpg" download>
          	<img src="../wallpaper\desktop\blackpanther.jpg">
            </a>

            <a href="../wallpaper\desktop\blackpanther2.jpg" download>
            <img src="../wallpaper\desktop\blackpanther2.jpg">
            </a>

            <a href="../wallpaper\desktop\mustang.jpg" download>
          	<img src="../wallpaper\desktop\mustang.jpg">
            </a>

            <a href="../wallpaper\desktop\mustang2.jpg" download>
            <img src="../wallpaper\desktop\mustang2.jpg">
            </a>

            <a href="../wallpaper\desktop\buggati.jpg" download>
          	<img src="../wallpaper\desktop\buggati.jpg">
            </a>

            <a href="../wallpaper\desktop\porsche.jpg" download>
           	<img src="../wallpaper\desktop\porsche.jpg">
            </a>

            <a href="../wallpaper\desktop\yamaha.jpg" download>
        	  <img src="../wallpaper\desktop\yamaha.jpg">
            </a>

            <a href="../wallpaper\desktop\yamaha2.jpg" download>
            <img src="../wallpaper\desktop\yamaha2.jpg">
            </a>

            <a href="../wallpaper\desktop\ford.jpg" download>
            <img src="../wallpaper\desktop\ford.jpg">
            </a>

            <a href="../wallpaper\desktop\ford3.jpg" download>
            <img src="../wallpaper\desktop\ford3.jpg">
            </a>

            <a href="../wallpaper\desktop\ford2.jpg" download>
            <img src="../wallpaper\desktop\ford2.jpg">
            </a>

            <a href="../wallpaper\desktop\chevrolet.jpg" download>
            <img src="../wallpaper\desktop\chevrolet.jpg">
            </a>

            <a href="../wallpaper\desktop\fortnite.jpg" download>
            <img src="../wallpaper\desktop\fortnite.jpg">
            </a>

            <a href="../wallpaper\desktop\hot air.jpg" download>
            <img src="../wallpaper\desktop\hot air.jpg">
            </a>

            <a href="../wallpaper\desktop\desert.jpg" download>
            <img src="../wallpaper\desktop\desert.jpg">
            </a>

            <a href="../wallpaper\desktop\blue snake.jpg" download>
            <img src="../wallpaper\desktop\blue snake.jpg">
            </a>

            <a href="../wallpaper\desktop\beach.jpg" download>
            <img src="../wallpaper\desktop\beach.jpg"> 
            </a>

            <a href="../wallpaper\desktop\splash.jpg" download>
            <img src="../wallpaper\desktop\splash.jpg">
            </a>

            <a href="../wallpaper\desktop\spiderman2.jpg" download>
            <img src="../wallpaper\desktop\spiderman2.jpg">
            </a>

            <a href="../wallpaper\desktop\spiderman.jpg" download>
            <img src="../wallpaper\desktop\spiderman.jpg">
            </a>

            <a href="../wallpaper\desktop\Pubghelmet.jpg" download>
            <img src="../wallpaper\desktop\Pubghelmet.jpg">
            </a>

            <a href="../wallpaper\desktop\pubg.jpg" download>
            <img src="../wallpaper\desktop\pubg.jpg">
            </a>

            <a href="../wallpaper\desktop\pubg2.jpg" download>
            <img src="../wallpaper\desktop\pubg2.jpg">
            </a>

            <a href="../wallpaperdesktop\pubg3.jpg" download>
            <img src="../wallpaper\desktop\pubg3.jpg">
            </a>

            <a href="../wallpaper\desktop\space.jpg" download>
            <img src="../wallpaper\desktop\space.jpg">
            </a>

            <a href="../wallpaper\desktop\princeofparsia.jpg" download>
            <img src="../wallpaper\desktop\princeofparsia.jpg">
            </a>

            <a href="../wallpaper\desktop\marshmello.jpg" download>
            <img src="../wallpaper\desktop\marshmello.jpg">
            </a>

            <a href="../wallpaper\desktop\mountain.jpg" download>
            <img src="../wallpaper\desktop\mountain.jpg">
            </a>

            <a href="../wallpaper\desktop\surface.jpg" download>
            <img src="../wallpaper\desktop\surface.jpg">
            </a>

            <a href="../wallpaper\desktop\moon.jpg" download>
            <img src="../wallpaper\desktop\moon.jpg">
            </a>

            <a href="../wallpaper\desktop\lake.jpg" download>
            <img src="../wallpaper\desktop\lake.jpg">
            </a>

            <a href="../wallpaper\desktop\tree.jpg" download>
            <img src="../wallpaper\desktop\tree.jpg">
            </a>

            <a href="../wallpaper\desktop\lamborghini.jpg" download>
            <img src="../wallpaper\desktop\lamborghini.jpg">
            </a>

            <a href="../wallpaper\desktop\audi.jpg" download>
            <img src="../wallpaper\desktop\audi.jpg">
            </a>

            <a href="../wallpaper\desktop\flower2.jpg" download>
            <img src="../wallpaper\desktop\flower2.jpg">
            </a>

            <a href="../wallpaper\desktop\flowerindark.jpg" download>
            <img src="../wallpaper\desktop\flowerindark.jpg">
            </a>

            <a href="../wallpaper\desktop\red.jpg" download>
            <img src="../wallpaper\desktop\red.jpg">
            </a>

            <a href="../wallpaper\desktop\watchdog.jpg" download>
            <img src="../wallpaper\desktop\watchdog.jpg">
            </a>

            <a href="../wallpaper\desktop\amd.jpg" download>
            <img src="../wallpaper\desktop\amd.jpg">
            </a>

            <a href="../wallpaper\desktop\rog.jpg" download>
            <img src="../wallpaper\desktop\rog.jpg">
            </a>

            <a href="../wallpaper\desktop\redeon.jpg" download>
            <img src="../wallpaper\desktop\redeon.jpg">
            </a>

            <a href="../wallpaper\desktop\nvidia.jpg" download>
            <img src="../wallpaper\desktop\nvidia.jpg">
            </a>

            <a href="../wallpaper\desktop\aorus.jpg" download>
            <img src="../wallpaper\desktop\aorus.jpg">
            </a>

            <a href="../wallpaper\desktop\chiron1.jpg" download>
            <img src="../wallpaper\desktop\chiron1.jpg">
            </a>

            <a href="../wallpaper\desktop\chiron.jpg" download>
            <img src="../wallpaper\desktop\chiron.jpg">
            </a>

            <a href="../wallpaper\desktop\bentley.jpg" download>
            <img src="../wallpaper\desktop\bentley.jpg">
            </a>

            <a href="../wallpaper\desktop\ocean.jpg" download>
            <img src="../wallpaper\desktop\ocean.jpg">
            </a>

            <a href="../wallpaper\desktop\bmw.jpg" download>
            <img src="../wallpaper\desktop\bmw.jpg">
            </a>

            </div>
<br>
</main>
</center>
</header>
</body>
</html>
