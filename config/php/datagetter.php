<?php 
$usernamelogin = $_SESSION['username'];
$sql_name = "select login.EmployeeID, hr_add_account.* from login inner join hr_add_account on login.EmployeeID = hr_add_account.EmployeeID where username ='$usernamelogin';";
$sql_message = "select login.EmployeeID, employee_log.* from login inner join employee_log on login.EmployeeID = employee_log.EmployeeID where username = '$usernamelogin'";
<<<<<<< HEAD
$result_name = mysqli_query($conn,$sql_name);
$result_message = mysqli_query($conn,$sql_message);
=======
$sql_earnings = "select login.EmployeeID, employee_payslip_receipt.*, employee_earning_payslip.*, employee_deduction_payslip.* from login inner join employee_payslip_receipt on login.EmployeeID = employee_payslip_receipt.EmployeeID inner join  employee_earning_payslip on employee_earning_payslip.EmployeeID = employee_payslip_receipt.EmployeeID inner join employee_deduction_payslip on employee_earning_payslip.EmployeeID = employee_deduction_payslip.EmployeeID where username = '$usernamelogin'";

$result_name = mysqli_query($conn,$sql_name);
$result_message = mysqli_query($conn,$sql_message);
$result_earnings = mysqli_query($conn,$sql_earnings);
>>>>>>> 26bad1990e27addd1a9e90bcc887002deb7a2bdf
            

while($row = mysqli_fetch_assoc($result_name)){
    $_SESSION['Identity_No'] = $row['Identity_No'];
    $_SESSION['FirstName'] = $row['FirstName'];
    $_SESSION['MiddleInitial'] = $row['MiddleInitial'];
    $_SESSION['LastName'] = $row['LastName'];
    $_SESSION['Position'] = $row['Position'];
    $_SESSION['Department'] = $row['Department'];
}
<<<<<<< HEAD
// while($row = mysqli_fetch_assoc($result_message)){

//     $_SESSION['Date'] = $row['Date'];
//     $_SESSION['fromName'] = $row['fromName'];
//     $_SESSION['Message'] = $row['Message'];

// }
=======

while($row = mysqli_fetch_assoc($result_earnings)){
// PAY SLIP RECEIPT
 $_SESSION['Date'] = $row['Date'];
 $_SESSION['Receipt_Code'] = $row['Receipt_Code'];
 $_SESSION['EmployeeName'] = $row['EmployeeName'];
 $_SESSION['Department'] = $row['Department'];
 $_SESSION['EmployeeID'] = $row['EmployeeID'];
// PAY SLIP RECEIPT END

// EARNING
>>>>>>> 26bad1990e27addd1a9e90bcc887002deb7a2bdf




<<<<<<< HEAD
=======
}
>>>>>>> 26bad1990e27addd1a9e90bcc887002deb7a2bdf
?>