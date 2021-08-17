<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "Movie";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 /*function CheckUser($conn,$table,$username,$password,$type)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."' AND type='". $type."'");
 return $result;
 }*/

 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."' ");
 return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 function GetOrderidByOrderid($conn,$table, $orderid)
 {
$result = $conn->query("SELECT * FROM  $table WHERE orderid='$orderid'");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$email,$address,$phoneno,$nid,$dob)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email',address='$address',phoneno='$phoneno',nid='$nid',dob='$dob' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 header ("location: ../view/dguyinfo.php");
 
}
}
?>