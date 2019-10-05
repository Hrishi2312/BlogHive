<?php
include(users.php);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up Form</title>
	<link rel="stylesheet"  href="Assets/css/signup.css">
	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
</head>
<body>
	<div class="title"><h1></h1></div>
	<div class="container" id="container">
		<div class="left"></div>
		<div class="right">
			<h1>Bonjour !</h1>
			<form name="signup_form" method="post" action="signup.php" >
				<h2 style="color: #664ec5; display: inline;">Register<span style="color: #717171"> your account</span></h2>
				<input type="text" placeholder="Username" name="username" id="user" >
				<input type="text" placeholder="Email" name="email">
				<input type="password" placeholder="Password" name="password">
				<input type="password" placeholder="Confirm Password" name="passwordConf">
				<button type="submit" name="submit-button">Sign Up</button>
				<h3> Have Account?</h3>
			</form>


		</div>
	</div>

</body>
</html>
