<?php 
include('config/php/connect.php');

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
        header("location: Employee(DashBoard).php"); 
    }
        
        
        
        
}

$sql = "INSERT INTO hr_list_of_employee (EmployeeID,Employee_Name,Department,Position)" VALUES 



?>