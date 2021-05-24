<?php
session_start();
?>

<?php
  $db = mysqli_connect("localhost", "root", "", "accounts");
  $msg = "";
  if (isset($_POST['upload'])){
  	$image = $_FILES['image']['name'];

  	$target = "images/".basename($image);
                                                               
  	$sql = "INSERT INTO images (image) VALUES ('$image')";

  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
}
  $result = mysqli_query($db, "SELECT * FROM images");
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
  	<link rel="stylesheet" type="text/css" href="../css/premium.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body oncontextmenu="return false;">
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
      <li><a class="side" href="SIGNIN.php">  
    <?php
    if(!isset($_SESSION['Profile'])){} 
		else{ echo  "Welcome ".$_SESSION['Profile']; }
		?>  
		</a></li>
    </ul>
  </div>
<br>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
	  echo "<div>";
	  echo "<a href='../PaytmKit/TxnTest.php'>";
		  echo "<img src='images/".$row['image']."' >";
		  echo "</a>";
      echo "</div>";
    }
  ?>

</div>
</body>
</html>