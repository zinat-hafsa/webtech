<?php
include('db.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['login'])) {
/*if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['type'])) {*/
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Check Username Password and Type again";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
/*$type=$_POST["type"];*/
}
$connection = new db();
$conobj=$connection->OpenCon();

/*$userQuery=$connection->CheckUser($conobj,"users",$username,$password,$type);*/
$userQuery=$connection->CheckUser($conobj,"users",$username,$password);

if ($userQuery->num_rows > 0) {
/*$_SESSION["username"] = $username;
$_SESSION["password"] = $password;*/
/*$_SESSION["type"]=$type;*/
$_SESSION['user_id'] = $username;
$connection->CloseCon($conobj);
header("location: ../user_dashboard.php");
   }
 else {
$error = "Check Username Password and Type again";
}
$connection->CloseCon($conobj);

}



?>