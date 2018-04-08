<?php include('server.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registration Form</h2>
	</div>
		<form name="formname" method="post">
		<? php include('error.php'); ?>
		<div class="inputgroup">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="inputgroup">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="inputgroup">
			<label>Password</label>
			<input type="password" name="password1">
		</div>
		<div class="inputgroup">
			<label>Confirm password </label>
			<input type="password" name="password2">
		</div>
		<div class="inputgroup">
			<button type="submit" name="confirm" id="btn">Submit</button>
		</div>
			<p>Already a member? <a href="login.php">Sign in</p>
		</form>
</body>
</html>