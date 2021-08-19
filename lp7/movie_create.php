<?php
include_once 'db.php';
include_once 'login_check.php';


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$movie_name = $_POST['movie_name'];
	$year = $_POST['year'];
	$rating = $_POST['rating'];

	$user_id = $_SESSION['user_id'];

	$command = "INSERT INTO `movie` (`user_id`, `movie_name`, `movie_year`, `movie_rating`) VALUES ('$user_id', '$movie_name', '$year', '$rating')";

	if (execute_query($command)) {
		echo "movie inserted";
		header("location: user_dashboard.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Movie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>Add new movie</h3>
	<form method="POST" name="movieForm" onsubmit="return validateForm()">
		<table style="width: auto;">
			<tr>
				<td>Movie Name: </td>
				<td><input type="text" name="movie_name"></td>
			</tr>
			<tr>
				<td>Release Year</td>
				<td><input type="number" name="year"></td>
			</tr>
			<tr>
				<td>Your rating (out of 10)</td>
				<td><input type="number" name="rating"></td>
			</tr>
			<tr>
				<td><button>Add Movie</button></td>
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