<?php 
include_once 'db.php';

$sql_command = "SELECT * FROM `product` WHERE phone_id = $_GET[id];";

$phone_data = execute_query($sql_command);
$phone = mysqli_fetch_assoc($phone_data);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$sql_command = "DELETE FROM `product` WHERE `product`.`phone_id` = $_GET[id]";

	if (execute_query($sql_command)) {
		echo "data deleted. go back to <a href='index.php'>home</a>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LP5 - Delete</title>
</head>
<body>
	<h1>Delete</h1>
	Are your sure you want to delete this:
	<br>
	<form method="POST">
		ID: <?php echo "$phone[phone_id]" ?> <br>
		Phone Name: <?php echo "$phone[phone_name]" ?> <br>
		Buying Price: <?php echo "$phone[buying_price]" ?> <br>
		Selling Price: <?php echo "$phone[selling_price]" ?> <br>
		<br>

		<button>Delete</button>
	</form>

</body>
</html>