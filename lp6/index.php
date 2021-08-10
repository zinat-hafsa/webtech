<?php
include_once 'db.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Guest Home</title>
</head>
<body>
	<center>
		<br><br>
		<h1>Public Home</h1>
		<br>
		<a href="login.php">Login</a>
		<br>
		<br>
		<a href="reg.php">Register</a>
	</center>
</body>
</html>