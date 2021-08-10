<?php
$servername="localhost";
$db_username="root";
$db_password="";
$dbname="test";

function execute_query($query){
    global $servername,$db_username,$db_password,$dbname;

    $connection=mysqli_connect($servername,$db_username,$db_password,$dbname);

    if($connection){
        $result=mysqli_query($connection,$query);
        mysqli_close($connection);
        return $result;
    }
}
/*
function execute_query_and_get_id($query){
    global $servername,$db_username,$db_password,$dbname;

    $connection=mysqli_connect($servername,$db_username,$db_password,$dbname);

    if($connection){
        mysqli_query($connection,$query);
        $result = mysqli_insert_id($connection);
        mysqli_close($connection);

        return $result;
    }
}*/
?>