<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login Form</h2>
	</div>
		<form name="formname" method="post" action="registration.php">
		<div class="inputgroup">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		
		<div class="inputgroup">
			<label>Password</label>
			<input type="text" name="password1">
		</div>
		
		<div class="inputgroup">
			<button type="submit" name="login" id="btn">Login</button>
		</div>
			<p>Not yet a member? <a href="main.php">Register</p>
		</form>
</body>
</html>