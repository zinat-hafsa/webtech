<?php
if (isset($_GET['movie_name'])) {
	include_once 'db.php';
	include_once 'login_check.php';

	$sql_command = "SELECT * FROM `movie` WHERE lower(movie_name) = lower('$_GET[movie_name]') AND `user_id` = $_SESSION[user_id];";
	$movie_data = execute_query($sql_command);

	if (mysqli_num_rows($movie_data)>0) {
		echo "<b>$_GET[movie_name]</b> is already added";
	}
}
?>