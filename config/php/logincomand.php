<?php
session_start();
    $accno = "";
    $_SESSION['accn'] = "nak";
    
    if (isset($_POST['submit'])){
        $username = $_POST['username'];  
        $password = $_POST['password'];
        
        $result = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'AND password= '$password'");
        $row = mysqli_fetch_assoc($result);
        

        
        
        if($row == null){
         echo '<script>alert("INVALID USERNAME OR PASSWORD")</script>';
        }
        else if ($row['username'] == $username &&  $row['password'] == $password){
            $_SESSION['username'] = $username;
            $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
            $txt = "John Doe\n";
            fwrite($myfile, $txt);
            $txt = "Jane Doe\n";
            fwrite($myfile, $txt);
            fclose($myfile);
            
            header("location: Employee(DashBoard).php"); 
        }
            
            
            
            
    }
        
    
?>