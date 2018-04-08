<?php
$username="";
$email="";

$errors=array();
$db=mysqli_connect('localhost',"root","","registrationform");

	if(isset($_POST['confirm'])){
		$username=mysql_real_escape_string($_POST['username']);
		$email=mysql_real_escape_string($_POST['email']);
		$password1=mysql_real_escape_string($_POST['password1']);
		$password2=mysql_real_escape_string($_POST['password2']);
	

	if(empty($username)){
		array_push($errors, "Please enter your username");
	}
	if(empty($email)){
		array_push($errors, "Please enter your email");
	}
	if(empty($password1)){
		array_push($errors, "Please enter your password");
	}
	if($password1 != $password2){
		array_push($errors, "Password doesn't match");
	}

	if(count($errors)==0){
		$password=md5($password1);
		$sql="INSERT INTO users ('username','email','password')
			  VALUES('$username','$email','$password')";
			  mysqli_query($db, $sql);
	}
}
?>