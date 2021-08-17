<?php 
include_once 'db.php';
include_once 'login_check.php';

$sql_command = "SELECT * FROM `movie` WHERE movie_id = $_GET[id] AND `user_id` = '$_SESSION[user_id]';";

$movie_data = execute_query($sql_command);
$movie = mysqli_fetch_assoc($movie_data);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$sql_command = "DELETE FROM `movie` WHERE `movie`.`movie_id` = $_GET[id]";

	if (execute_query($sql_command)) {
		echo "Data Deleted</a>";
		header("location: user_dashboard.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Movie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Delete</h1>
	<p class="warning"><b>Are your sure you want to delete this movie?</b></p>
	<form method="POST">
		Movie Name: <?php echo "$movie[movie_name]" ?> <br>
		Year: <?php echo "$movie[movie_year]" ?> <br>
		Rating: <?php echo "$movie[movie_rating]" ?> <br>
		<br>
		<button>Delete</button>
		<a href="user_dashboard.php">Back to Home</a>
	</form>

</body>
</html>