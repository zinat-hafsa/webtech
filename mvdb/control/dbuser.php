<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "Movie"; //Movie
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password,$type)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."' AND type='". $type."'");
 return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
    
function insert($conn, $table, $MovieID, $MovieName, $Director, $Production, $Genre, 
    $Rating, $MoviePublished, $UserName){
    
   
    
    $sql = "INSERT INTO ".$table." (MovieID, MovieName, Director, Production, Genre, Rating, MoviePublished, UserName) VALUES('".$MovieID."', '".$MovieName."', '".$Director."', '".$Production."', '".$Genre."', '".$Rating."', '".$MoviePublished."', '".$UserName."')";
    
    
    if($conn->query($sql)!= TRUE){
        
        echo "error";
        
    }
    
    else{
        
        echo "New Movie inserted";
        
    }
    
    
    
}
    
function deliver_details($conn, $table, $orderID, $buyerName, $buyerPhone, $sellerName){



    $sql = "INSERT INTO ".$table." (OrderID, BuyerName, BuyerPhone, SellerName) VALUES('".$orderID."', '".$buyerName."', '".$buyerPhone."', '".$sellerName."')";



    if($conn->query($sql)!= TRUE){
        
        echo "error";
        
    }
    
    else{
        
        echo "New Movie inserted";
        
    }


}


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>

