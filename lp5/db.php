<?php
$servername="localhost";
$db_username="root";
$db_password="";
$dbname="phone_db";

function execute_query($query){
    global $servername,$db_username,$db_password,$dbname;

    $connection=mysqli_connect($servername,$db_username,$db_password,$dbname);

    if($connection){
        $result=mysqli_query($connection,$query);
        mysqli_close($connection);
        return $result;
    }
}
?>
