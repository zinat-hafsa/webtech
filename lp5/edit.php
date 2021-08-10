<?php 
include_once 'db.php';

$sql_command = "SELECT * FROM `product` WHERE phone_id = $_GET[id];";

$phone_data = execute_query($sql_command);
$phone = mysqli_fetch_assoc($phone_data);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$sql_command = "UPDATE `product` SET `phone_name` = '$_POST[phone_name]', `buying_price` = '$_POST[b_price]', `selling_price` = '$_POST[s_price]', `show_data` = 'isset($_POST[show_data])' WHERE `product`.`phone_id` = $_GET[id]";

	if (execute_query($sql_command)) {
		echo "data updated";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LP5 - EDIT</title>
</head>
<body>
	<h1>EDIT</h1>
	<form method="POST">
		Name : <input type="text" name="phone_name" value="<?php echo "$phone[phone_name]";?>">
		<br>
		Buying Price : <input type="number" name="b_price" value="<?=$phone['buying_price'];?>">
		<br>
		Selling Price : <input type="number" name="s_price" value="<?=$phone['selling_price'];?>">
		<br>
		Show : <input type="checkbox" name="show_data" value="<?=$phone['show_data'];?>"> Yes
		<br>
		<button>Submit</button>
	</form>
</body>
</html>