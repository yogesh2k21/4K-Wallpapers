<?php
	session_start();
?> 
<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
</head>
<body>
<?php
	 
?>
<header>
	<div class="main"> 
      <nav>
		<ul>
			<li class="active"><a href="HOME.php">HOME</a></li>
			<li><a href="SUBSCRIBE.php">Subscribe</a></li>
			<li><a href="CONTACT.php">Contact</a></li>
			<li><a href="ABOUT.php">About us</a></li>

	<?php 
		if(isset($_SESSION['Profile'])){
			echo '<li><a href="index.php">Premium</a></li>';
		}
		else{
			echo'';
		}
	?>
		</ul>

		<?php
		if(isset($_SESSION['Profile'])){
			echo '<a href="../PHP/signout.php" class="sign">'.$_SESSION['Profile'].'</a>'; }
		else{
		    echo '<a href="SIGNIN.php" class="sign">Sign in</a>'; }
	?>

	<div class="title"><h1>4KWALLPAPERS </h1></div>
	<div class="BUTTON">
		<a href="DESKTOP.php" class="btn">DESKTOP</a>
		<a href="MOBILE.php" class="btn">MOBILE</a>
	</div>
</header>
<footer>
	<div class="upper">
		<br>
		
		<br><br>
		<a href="https://www.facebook.com/Prince.Sha.2000" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="https://www.linkedin.com/in/yogesh-923801160" class="fa fa-linkedin"></a>
		<a href="https://www.youtube.com/channel/UC7kq9No-7qcuD_OvnTqiL4g" class="fa fa-youtube"></a>	
	</div>
	<div class="lower">
		&#169; All Rights Reserved | Made with<i class="fa fa-heart" style="font-size:20px;color:red"></i>by YOGESH
	</div>
</footer>
</body>
</html>
