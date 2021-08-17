
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
  background-image: url('../view/background/image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>
<h2>Purchase Information Page</h2>

<h3>Hii, <?php echo $_SESSION["username"];?></h3>
<br/>Purchase Status: 
    <?php
$BuyerName=$_POST["BuyerName"];
$BuyerPhoneNumber= $_POST["BuyerPhoneNumber"];
$SellerName=$_POST["SellerName"];
$MovieName=$_POST["MovieName"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Movie";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO buyerrequest (BuyerName, BuyerPhoneNumber, SellerName, MovieName)
VALUES ('$BuyerName','$BuyerPhoneNumber','$SellerName','$MovieName')";
$res = $conn->query($sql);//execute query
if($res)
{ echo "Purchase successful!";}
else
{ echo "error occurred"; }
$conn->close();

?>

<br/>
<br/>
<br/>
<a href="../view/showmovie.php">Go to previous page</a>
<br/>
<a href="../control/logout.php">logout</a>

</body>
</html>