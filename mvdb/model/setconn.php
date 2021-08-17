<?php
    $conn= new mysqli("localhost","root","","Movie");


    function execute($sql)
    {
        global $conn;
        $res= $conn->query($sql);
        return $res;
    }
   
?>