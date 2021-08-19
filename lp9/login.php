<?php
include_once 'db.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql_command = "SELECT * FROM `user` WHERE `username` = '$username'";
	$result = execute_query($sql_command);

	if (mysqli_num_rows($result)==0) {
		echo "Wrong Username.";
	}
	else {
		$user_info = mysqli_fetch_assoc($result);
		if ($user_info['password'] != $password) {
			echo "Wrong Password";
		}
		else{
			$_SESSION['user_id'] = $user_info['user_id'];
			header("location: home.php");
		}
	}
}

if ( isset($_SESSION['user_id']) ) {
	header("location: user_dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login dummy</title>
</head>
<body>
	<form method="POST">
		Username: 
		<input type="text" name="username">
		<br>
		Password:
		<input type="password" name="password">
		<br>
		<button>Login</button>
	</form>
</body>
</html>