<?php
include('C:/xampp/htdocs/Blog/App/Database/db.php');
if(isset($_POST['submit-button'])) {
	unset($_POST['submit-button']);
	$user = selectOne('users', ['email'=>$_POST['email']]);
	$password = $user['password'];
	if(password_verify($_POST['password'], $password))
		echo "<script>alert('You have successfully logged in.');</script>";
	else
		echo "Couldn't";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet"  href="Assets/css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
</head>
<body>
	<div class="title"><h1></h1></div>
	<div class="container" id="container">
		<div class="left"></div>
		<div class="right">
			<h1>Bonjour !</h1>
			<form action="login.php" method = "post">
				<h2 style="color: #664ec5; display: inline;">Login<span style="color: #717171"> your account</span></h2>
				<input type="email" placeholder="email" name = "email">
				<input type="password" placeholder="Password" name = "password">
				<p>forget password?</p>
				<button name = "submit-button">Login</button>
				<h3><a href = "signup.php">Create Account</a></h3>
			</form>


		</div>
	</div>

</body>
</html>
