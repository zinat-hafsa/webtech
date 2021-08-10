<?php
include_once 'db.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql_command = "INSERT INTO `lp6` (`user_id`, `username`, `password`) VALUES (NULL, '$username', '$password')";
	$new_user_id = execute_query($sql_command);

	echo "id created. <a href='login.php'>login</a>";
}

if ( isset($_SESSION['user_id']) ) {
	header("location: home.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h1>Create new account</h1>
	<form method="POST">
		Username : <input type="text" name="username" required>
		<br>
		Password : <input type="password" name="password" required>
		<br>
		<button>Submit</button>
	</form>
</body>
</html>