<?php 
// ewqe
include('connect.php');
$usernamelogin = $_SESSION['username'];
$sql_name = "select login.EmployeeID, hr_add_account.* from login inner join hr_add_account on login.EmployeeID = hr_add_account.EmployeeID where username ='$usernamelogin';";
$sql_message = "select login.EmployeeID, employee_log.* from login inner join employee_log on login.EmployeeID = employee_log.EmployeeID where username = '$usernamelogin'";
$sql_earnings = "select login.EmployeeID, employee_payslip_receipt.*, employee_earning_payslip.*, employee_deduction_payslip.* from login inner join employee_payslip_receipt on login.EmployeeID = employee_payslip_receipt.EmployeeID inner join  employee_earning_payslip on employee_earning_payslip.EmployeeID = employee_payslip_receipt.EmployeeID inner join employee_deduction_payslip on employee_earning_payslip.EmployeeID = employee_deduction_payslip.EmployeeID where username = '$usernamelogin'";
$sql_employeeinfo = "select login.EmployeeID, employee_information.* from login inner join employee_information on login.EmployeeID = employee_information.EmployeeID where username ='$usernamelogin';";
$sql_employeeearning ="select login.EmployeeID, employee_info_earnings.* from login inner join employee_info_earnings on employee_info_earnings.EmployeeID = login.EmployeeID where username ='$usernamelogin';";
$sql_listofemp = "select * from hr_list_of_employee;";




$result_name = mysqli_query($conn,$sql_name);
$result_message = mysqli_query($conn,$sql_message);
$result_message1 = mysqli_query($conn,$sql_message);
$result_earnings = mysqli_query($conn,$sql_earnings);
$result_employeeinfo = mysqli_query($conn,$sql_employeeinfo);
$result_employeeearning = mysqli_query($conn,$sql_employeeearning);
$result_listofemp = mysqli_query($conn,$sql_listofemp);

while($row = mysqli_fetch_assoc($result_name)){
    $_SESSION['Identity_No'] = $row['Identity_No'];
    $_SESSION['FirstName'] = $row['FirstName'];
    $_SESSION['MiddleInitial'] = $row['MiddleInitial'];
    $_SESSION['LastName'] = $row['LastName'];
    $_SESSION['Position'] = $row['Position'];
    $_SESSION['Department'] = $row['Department'];
}

while($row = mysqli_fetch_assoc($result_earnings)){
// PAY SLIP RECEIPT
$_SESSION['Date'] = $row['Date'];
$_SESSION['Receipt_Code'] = $row['Receipt_Code'];
$_SESSION['EmployeeName'] = $row['EmployeeName'];
$_SESSION['Department'] = $row['Department'];
$_SESSION['EmployeeID'] = $row['EmployeeID'];
$_SESSION['Total_Earning'] = $row['Total_Earning'];
$_SESSION['NetPay'] = $row['NetPay'];
$_SESSION['Amount'] = $row['Amount'];
$_SESSION['Total_Deduction'] = $row['Total_Deduction'];
// PAY SLIP RECEIPT END

// EARNING

}

while($row = mysqli_fetch_assoc($result_employeeinfo )){
    // PAY SLIP RECEIPT
     $_SESSION['FirstName'] = $row['FirstName'];
     $_SESSION['MiddleName'] = $row['MiddleName'];
     $_SESSION['LastName'] = $row['LastName'];
     $_SESSION['Date_of_Birth'] = $row['Date_of_Birth'];
     $_SESSION['Gender'] = $row['Gender'];
     $_SESSION['Address'] = $row['Address'];
     $_SESSION['City'] = $row['City'];
     $_SESSION['Region'] = $row['Region'];
     $_SESSION['Country'] = $row['Country'];
     $_SESSION['Status'] = $row['Status'];
     $_SESSION['Nationality'] = $row['Nationality'];
     $_SESSION['Email'] = $row['Email'];
     $_SESSION['Mobile_No'] = $row['Mobile_No'];
     $_SESSION['Identity_No'] = $row['Identity_No'];
     
    }

while($row = mysqli_fetch_assoc($result_employeeearning )){
    // EMPLOYEE EARNING
    $_SESSION['EmployeeName'] = $row['EmployeeName'];
    $_SESSION['Rate_per_hour'] = $row['Rate_per_hour'];
    $_SESSION['Position'] = $row['Position'];
    $_SESSION['Salary'] = $row['Salary'];
    $_SESSION['Deductions'] = $row['Deductions'];
    $_SESSION['Deductions2'] = $row['Deduction2'];
    $_SESSION['Deductions3'] = $row['Deduction3'];
   
    
    }

    
    
    
?>