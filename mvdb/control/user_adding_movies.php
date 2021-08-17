<?php
include('dbuser.php');
if(isset($_REQUEST['add'])){
    
    if(!empty($_REQUEST['MovieId']) and !empty($_REQUEST['MovieName']) and !empty($_REQUEST['Director'])
      and !empty($_REQUEST['Production']) and !empty($_REQUEST['Genre']) and !empty($_REQUEST['Rating'])
      and !empty($_REQUEST['MoviePublished']) and !empty($_REQUEST['UserName'])){
        
        $connection = new db();
        $conn=$connection->OpenCon();
        
        $connection->insert($conn, "inventory", $_REQUEST['MovieId'], $_REQUEST['MovieName'], $_REQUEST['Director'],
                           $_REQUEST['Production'], $_REQUEST['Genre'], $_REQUEST['Rating'], $_REQUEST['MoviePublished'], 
                           $_REQUEST['UserName']);
        
    }
    
}

?>