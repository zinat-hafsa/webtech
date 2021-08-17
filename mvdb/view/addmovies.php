<?php

session_start(); 

include('../control/dbuser.php');
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"users",$_SESSION["username"],$_SESSION["password"],$_SESSION["type"]);

   $sellerName=$_SESSION["username"];
if ($userQuery->num_rows > 0) {

// output data of each row
while($row = $userQuery->fetch_assoc()) {
    
    $sellerEmail=$row["email"];
    $sellerContact =$row["phoneno"];  
}

} else {
echo "0 results";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seller - Home</title>
    <style>
h1 {text-align: center;}

p {text-align: center;}
body {
  background-image: url('background/image.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>

<body>
    <fieldset>
    
        
        
        <form action="../control/user_adding_movies.php" method="post">
            
            <fieldset>
                
                <legend><b> Add Movie</b></legend>
                
                Movie Id: <input type="text" name="MovieID"> <br> <br>
                Movie Name: <input type="text" name="MovieName"> <br> <br>
                Director: <input type="text" name="Director"> <br> <br>
                Production: <input type="text" name="Production"> <br> <br>
                Genre: <select name="Genre" >
				<option value="Biography"  selected >Biography</option>
				<option value="Thriller">Thriller</option>
				<option value="Drama">Drama</option>
				<option value="Sci-Fiction">Sci-Fiction</option>
				<option value="Fantasy">Fantasy</option>
			</select><br><br> 
                Movie Rating: <input type="number" name="Rating"><br><br>
                Movie Published: <input type="date" name="MoviePublished"><br><br>
                User Name: <input type="text" name="UserName"> <br> <br>
                <a href="../control/user_adding_movies.php"><input type="submit" name="add" value="Add Movie"></a>
                <input type="Reset"> <br>
            </fieldset>
            <p><a href="movieinfo.php">Show List</a></p>
            <h5><p>Do you want to <a href="../control/logout.php">logout</a></p></h5>
            
        </form>
        <br>
       
        </fieldset>

</body>
</html>