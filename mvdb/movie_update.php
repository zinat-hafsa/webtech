<?php 
include_once 'db.php';
include_once 'login_check.php';

$sql_command = "SELECT * FROM `movie` WHERE movie_id = $_GET[id] AND `user_id` = '$_SESSION[user_id]';";

$movie_data = execute_query($sql_command);
$movie = mysqli_fetch_assoc($movie_data);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$sql_command = "UPDATE `movie` SET `movie_name` = '$_POST[movie_name]', `movie_year` = '$_POST[year]', `movie_rating` = '$_POST[rating]' WHERE `movie`.`movie_id` = $_GET[id] AND `movie`.`user_id` = '$_SESSION[user_id]';";

	if (execute_query($sql_command)) {
		echo "Data Updated";
		header("location: user_dashboard.php");
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Movie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>Update</h3>
	<form method="POST" name="movieForm" onsubmit="return validateForm()">
		<table style="width: auto;">
			<tr>
				<td>Movie Name:</td>
				<td><input type="text" name="movie_name" value="<?php echo "$movie[movie_name]";?>"></td>
			</tr>
			<tr>
				<td>Year:</td>
				<td><input type="number" name="year" value="<?=$movie['movie_year'];?>"></td>
			</tr>
			<tr>
				<td>Rating</td>
				<td><input type="number" name="rating" value="<?=$movie['movie_rating'];?>"></td>
			</tr>
			<tr>
				<td><button>Update</button></td>
				<td><a href="user_dashboard.php">Back to Home</a></td>
			</tr>
		</table>		
	</form>
</body>

<script type="text/javascript">
function validateForm() {
  m_name = document.forms["movieForm"]["movie_name"].value;
  m_year = document.forms["movieForm"]["year"].value;
  m_rating = document.forms["movieForm"]["rating"].value;
  
  if (m_name == "") {
    alert("Name must be filled out");
    return false;
  }

  if (m_year == "") {
    alert("Year must be filled out");
    return false;
  }

  if (m_rating == "") {
    alert("Rating must be filled out");
    return false;
  }

  if (m_rating > 10 || m_rating < 0) {
    alert("Rating must be between 0 to 10");
    return false;
  }
}
</script>

</html>