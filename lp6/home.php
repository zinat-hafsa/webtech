<?php
include_once 'db.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ( isset($_SESSION['user_id']) ) {
	$sql_command = "SELECT username FROM `lp6` WHERE `user_id` = $_SESSION[user_id];";
	$result = execute_query($sql_command);

	$username_data = mysqli_fetch_assoc($result);
	$username = $username_data['username'];
}
else {
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>User Home</h1>
	<h3>Welcome <?php echo "$username"; ?> </h3>
	<a href="logout.php">logout</a>
</body>
</html>