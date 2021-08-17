<?php 
include_once 'db.php';
include_once 'login_check.php';

$user_id = $_SESSION['user_id'];

$command = "SELECT * FROM `movie` WHERE user_id = '$user_id'";

$my_movie_list = execute_query($command);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<h1>My Movies</h1>
	<a href="movie_create.php">Add Movie</a>
	<br><br>
	<table border="1">
		<tr>
			<th>Movie Name</th>
			<th>Release Year</th>
			<th>Rating</th>
			<th>Options</th>
		</tr>

		<?php 
			while ( $movie = mysqli_fetch_assoc($my_movie_list) ) {
				echo "
				<tr>
					<td>$movie[movie_name]</td>
					<td>$movie[movie_year]</td>
					<td>$movie[movie_rating]</td>
					<td>
						<a href='movie_update.php?id=$movie[movie_id]'>Edit</a>
						<a href='movie_delete.php?id=$movie[movie_id]'>Delete</a>
					</td>
				</tr>
				";
			}
		?>
		<tr>
			<td colspan="4" style="text-align: center;">End of List</td>
		</tr>
	</table>
</body>
</html>