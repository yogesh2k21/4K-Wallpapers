<!DOCTYPE html>
<html>
<head>
	<title>Subscribe</title>
	<link rel="stylesheet" type="text/css" href="../css/subscribe.css">
</head>
<body>
<div class="container">
	<img src="../Images\subscribe.png" class="png">
    <h6>Subscribe to our mailing List to get the update on your Email</h6>
	<form action="../PHP/subscribe.php" method="POST">
        <input type="name" name="name" placeholder="Enter your name">
        <br><br>
        <input type="email" name="Email" placeholder="Enter your email">
        <br><br>
        <input type="submit" name="subscribe" value="SUBSCRIBE">
        <br>
      </form>
</div>
</body>
</html>