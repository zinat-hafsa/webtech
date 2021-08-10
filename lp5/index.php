<?php 
include_once 'db.php';

$sql_command = "SELECT * FROM `product`;";
$phone_data = execute_query($sql_command);
?>




<!DOCTYPE html>
<html>
<head>
	<title>LP5 - SHOW</title>
</head>
<body>
	<h1>Display</h1>
	<br>
	<a href="insert.php">Add new phone</a>
	<br><br><br>
	<table border="1" >
		<tr>
			<th>ID</th>
			<th>Phone Name</th>
			<th>Buying Price</th>
			<th>Selling Price</th>
			<th>Show</th>
			<th>Options</th>
		</tr>
		<?php 
			while ( $phone = mysqli_fetch_assoc($phone_data) ) {
				echo "
				<tr>
					<td>$phone[phone_id]</td>
					<td>$phone[phone_name]</td>
					<td>$phone[buying_price]</td>
					<td>$phone[selling_price]</td>
					<td>$phone[show_data]</td>
					<td>
						<a href='edit.php?id=$phone[phone_id]'>edit</a>
						<a href='delete.php?id=$phone[phone_id]'>delete</a>
					</td>
				</tr>
				";
			}
		?>
	</table>
</body>
</html>