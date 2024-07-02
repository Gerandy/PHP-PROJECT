<?php 
include('config/php/connect.php');

$sql_EmployeeSalaryPerHour = "SELECT * FROM employee_information;";
$result_EmployeeSalaryPerHour = mysqli_query($conn, $sql_EmployeeSalaryPerHour);





if (isset($_GET['submit'])){

    $username = $_GET['EmployeeID'];
    $RatePerHour = $_GET["RatePerHour"];
    $Deduction1 = $_GET["deduction1"];
    $Deduction2 = $_GET["deduction2"];
    $Deduction3 = $_GET["deduction3"];
    echo $username;
    
    
    $sql = "UPDATE editearningperhour SET ratePerHour = '$RatePerHour', Deduction1 = '$Deduction1', Deduction2 = '$Deduction2', Deduction3 = '$Deduction3' where username = '$username'";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("SALARY SUCCESSFULLY UPDATED")</script>';
    } 
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


?>