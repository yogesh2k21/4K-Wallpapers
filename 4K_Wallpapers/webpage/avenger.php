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

            <a href="../wallpaper\desktop\spiderman2.jpg" download>
            <img src="../wallpaper\desktop\spiderman2.jpg">
            </a>

            <a href="../wallpaper\desktop\spiderman.jpg" download>
            <img src="../wallpaper\desktop\spiderman.jpg">
            </a>

            <a href="../wallpaper\desktop\space.jpg" download>
            <img src="../wallpaper\desktop\space.jpg">
            </a>

            <a href="../wallpaper\desktop\dbz.jpg" download>
       	    <img src="../wallpaper\desktop\dbz.jpg">
            </a>
    </div>
<br>
<br>
<br>
<br>
</main>
</center>
</header>
</body>
</html>
