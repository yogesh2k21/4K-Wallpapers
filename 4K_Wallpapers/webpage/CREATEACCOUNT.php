<!DOCTYPE html>
<html>
<head> 
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="../css/createaccount.css">
	<script>
		function checking()
		{
		var result=true;
		var email=document.getElementsByName("email")[0].value;
		var atindex=email.indexOf('@');
		var dotindex=email.lastIndexOf('.');
		if(atindex<1 || dotindex-atindex<6 || dotindex>=email.length-2)
		{
			result=false;
		}
		return(result);
		}
	</script>
</head>
<body>
<div class="box">
	<img src="../Images\manlogo.jpg" alt="manlogo" class="jpg">
	<center><h2>Create Account</h2></center>
	<form action="../PHP/newuser.php" method="POST" onsubmit="return checking()">
		<input type="name" name="fn" placeholder="First Name" required>
		<input type="name" name="ln" placeholder="Last Name" required>
		<br>
		<input type="email" name="E" placeholder="Email" required>
		<select name="gender" required>
		<option value="male">MALE</option>
		<option value="female">FEMALE</option>
		<option value="other">OTHER</option>
		</select>
		<br>
		<input type="password" name="Password" placeholder="Password" required>
		<input type="password" name="Rpassword" placeholder="Re-enter Password" required>
		<br>
		<input type="submit" name="register" value="Create Account">
</form>
<br><br>
<a href="SIGNIN.php">Already have an Account</a>
</div>	
</body>
</html>