<?php
include('App/Database/db.php');
if(isset($_POST['submit-button'])) {
	unset($_POST['submit-button'], $_POST['passwordConf']);
    $_POST['admin'] = 1;
	$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$user_id = create('users', $_POST);
  $user = selectOne('users', ['id'=>$user_id]);
	$_SESSION['id'] = $user_id;
	$_SESSION['username'] = $user['username'];
	$_SESSION['admin'] = $user['admin'];
	$_SESSION['message'] = 'You are now logged in';
	$_SESSION['type'] = 'success';
	header('Location: index.php');
	exit();
	//print_r($user);
	//var_dump($_POST);
}
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
				<h3> <a href = "login.php">Have Account?</a></h3>
			</form>


		</div>
	</div>

</body>
</html>
