<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if (isset($_SESSION['user_id']) == false) {
	header("location: login.php");
}

echo '<p class="logout"><a href="logout.php" >Logout</a></p>';
?>