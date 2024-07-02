<?php 
$usernamelogin = $_SESSION['username'];
$sql_name = "select login.EmployeeID, hr_add_account.* from login inner join hr_add_account on login.EmployeeID = hr_add_account.EmployeeID where username ='$usernamelogin';";
$sql_message = "select login.EmployeeID, employee_log.* from login inner join employee_log on login.EmployeeID = employee_log.EmployeeID where username = '$usernamelogin'";
$result_name = mysqli_query($conn,$sql_name);
$result_message = mysqli_query($conn,$sql_message);
            

while($row = mysqli_fetch_assoc($result_name)){
    $_SESSION['Identity_No'] = $row['Identity_No'];
    $_SESSION['FirstName'] = $row['FirstName'];
    $_SESSION['MiddleInitial'] = $row['MiddleInitial'];
    $_SESSION['LastName'] = $row['LastName'];
    $_SESSION['Position'] = $row['Position'];
    $_SESSION['Department'] = $row['Department'];
}
// while($row = mysqli_fetch_assoc($result_message)){

//     $_SESSION['Date'] = $row['Date'];
//     $_SESSION['fromName'] = $row['fromName'];
//     $_SESSION['Message'] = $row['Message'];

// }




?>