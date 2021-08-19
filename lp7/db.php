<?php
function execute_query($query){
    $servername="localhost";
	$db_username="root";
	$db_password="";
	$dbname="movie_db";

    $connection=mysqli_connect($servername,$db_username,$db_password,$dbname);

    if($connection){
        $result=mysqli_query($connection,$query);
        mysqli_close($connection);
        return $result;
    }
}
?>


