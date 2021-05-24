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

            <a href="../wallpaper\desktop\space.jpg" download>
            <img src="../wallpaper\desktop\space.jpg">
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

            <a href="../wallpaper\desktop\flower2.jpg" download>
            <img src="../wallpaper\desktop\flower2.jpg">
            </a>

            <a href="../wallpaper\desktop\flowerindark.jpg" download>
            <img src="../wallpaper\desktop\flowerindark.jpg">
            </a>

            <a href="../wallpaper\desktop\ocean.jpg" download>
            <img src="../wallpaper\desktop\ocean.jpg">
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
