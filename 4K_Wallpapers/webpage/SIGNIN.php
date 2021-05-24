<!DOCTYPE html>
<html>
<head>
	<title>SIGN IN</title>
	<link rel="stylesheet" type="text/css" href="../CSS\signin.css">
</head>
<body>
	<div class="loginbox">
		<img src="../Images\manlogo.jpg" class="manlogo">
		<h1>Login</h1>
		<form action="../PHP/signin.php" method="POST">

			<input type="email" name="Email" placeholder="Enter Email">

			<input type="Password" name="Password" placeholder="Enter Password">
			<input type="submit" name="register" value="Login"><br>
			<a href="FORGOTPASSWORD.php">Forgot your Password?</a><br>
			<a href="CREATEACCOUNT.php">Don't have any Account?</a>
		</form>
	</div>
</body>
</html> 
 