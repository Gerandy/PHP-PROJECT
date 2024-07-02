<?php 
        
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "phppayroll";         
    $conn = new mysqli($server,$user,$pass,$dbname);
    if ($conn -> connect_error){
        die("connect error " . $conn -> connect_error);
    }    

    
?>