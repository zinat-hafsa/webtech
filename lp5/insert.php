<?php 
include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$sql_command = "INSERT INTO `product` (`phone_id`, `phone_name`, `buying_price`, `selling_price`, `show_data`) 
		VALUES (NULL, '$_POST[phone_name]', '$_POST[b_price]', '$_POST[s_price]', 'isset($_POST[show_data])')";

	if (execute_query($sql_command)) {
		echo "data inserted";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LP5 - Insert</title>
</head>
<body>
	<h1>Insert</h1>
	<form method="POST">
		Name : <input type="text" name="phone_name">
		<br>
		Buying Price : <input type="number" name="b_price">
		<br>
		Selling Price : <input type="number" name="s_price">
		<br>
		Show : <input type="checkbox" name="show_data"> Yes
		<br>
		<button>Submit</button>
	</form>
</body>
</html>