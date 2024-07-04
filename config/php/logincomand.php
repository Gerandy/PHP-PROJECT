<?php
session_start();
    
    
    
    if (isset($_POST['submit'])){
        $username = $_POST['username'];  
        $password = $_POST['password'];
        
        $result = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'AND password= '$password'");
        $row = mysqli_fetch_assoc($result);
        

        if($row == null){
         echo '<script>alert("INVALID USERNAME OR PASSWORD")</script>';
        }
        else if ($row['username'] == $username &&  $row['password'] == $password){
            if($row['Employment_Type'] == "Human Resources"){

                
                $_SESSION['username'] = $username;
                header("location: Admin(DashBoard).php"); 
            }
            else{
               
                $_SESSION['username'] = $username;
                header("location: Employee(DashBoard).php"); 
            }    
        }else{

        }
    }