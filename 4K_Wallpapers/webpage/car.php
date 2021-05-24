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

            <a href="../wallpaper\desktop\lamborghini.jpg" download>
            <img src="../wallpaper\desktop\lamborghini.jpg">
            </a>

            <a href="../wallpaper\desktop\audi.jpg" download>
            <img src="../wallpaper\desktop\audi.jpg">
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

            <a href="../wallpaper\desktop\audi.jpg" download>
            <img src="../wallpaper\desktop\audi.jpg">
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
