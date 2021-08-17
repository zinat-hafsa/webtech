<?php
include('../control/db.php');
session_start(); 

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
h1 {text-align: center;}
h2 {text-align: center;}
h3 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('background/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>
<h2>Movie Lists</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>


<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"inventory");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Movie ID</th><th>Movie Name</th><th>Director</th><th>Production</th><th>Genre</th><th>Movie Rating</th><th>Movie Published</th><th>User Name</th>";
    // output data of each rowth
    while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["MovieID"]."</td><td>".$row["MovieName"]."</td><td>".$row["Director"]."</td><td>".$row["Production"]."</td><td>".$row["Genre"]."</td><td>".$row["Rating"]."</td><td>".$row["MoviePublished"]."</td><td>".$row["UserName"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

?>

<br/>
<br/>
<br/>

<br/>
<a href="../control/logout.php">logout</a>

</body>
</html>