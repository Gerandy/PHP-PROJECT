<?php 
include('config/php/addSalary.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\EditEmployeeDetails2(Admin).css">
    <link rel="stylesheet" href="assets\css\Admin(AddAccount).css">
    
    <style>
        .Icons_Section{
            cursor: pointer;
            transition: 0.3 ease;
        }
    
        .Icons_Section:hover{
            background-color: #808080;
        }
        
        
    </style>
</head>
       <body class="body">
        <!-- Side Bar -->
        <div class="Dashboard_Header"> 
            <p class="Swift_Text">SWIFT</p>
            <p class="Pay_Text">PAY</p>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-2 sidebar">
                    <img src="assets/Icon/UserPhoto.png" class="UserPhoto img-responsive">
                    <div class="Icons_Section" onclick="redirectToAdminDashBoard()">
                        <img src="assets/Icon/DashBoard_Icon.png" class="Icons img-responsive">
                        <p class="Sidebar_Text">DASH<br>BOARD</p>
                    </div>
                    <script>
                        function redirectToAdminDashBoard(){
                            window.location.href='Admin(DashBoard).php';
                        }
                    </script>
                    <div class="Icons_Section" onclick="redirectToEmployeeListAdmin()">
                        <img src="assets/Icon/EmployeesList_Icon.png" class = "Icons">
                        <p class = "Sidebar_Text"> EMPLOYEE <br> LIST </p>
                    </div>
                    <script>
                        function redirectToEmployeeListAdmin(){
                            window.location.href='EmployeeList(Admin).php';
                        }
                    </script>
                    <div class="Icons_Section" onclick="redirectToAdminMessage()">
                        <img src="assets/Icon/Messages_Icon.png" class = "Icons">
                        <p class = "Sidebar_Text"> MESSAGES</p>
                    </div>
                    <script>
                        function redirectToAdminMessage(){
                            window.location.href='Admin(Messages).php';
                        }
                    </script>
                    <div class="Icons_Section" onclick="redirectToLogin()">
                    <img src="assets/Icon/LogOut_Icon.png" class="LogOff_Icon img-responsive">
                    </div>
                    <script>
                        function redirectToLogin(){
                            window.location.href='Login.php';
                        }
                    </script>
                </div>

                <div class="col-xs-12 col-sm-9 col-md-8 Dashboard_Content">
                    <!-- Dashboard Content Here -->
                    <!-- Dito mo lagay delosreyes mga gawa mo-->
                    <div class="Buttons">
                        <button onclick="redirectTo('Employee(Profile_EmployeeInfo).php')" class="EmployeeInfoDropDown"> EMPLOYEE INFO </button>
                    </div>
                    <div class="Buttons">
                        <button onclick="redirectTo('Employee(Profile_Earning).php')" class="EarningsDropDown"> EARNINGS </button>
                    </div>
                  
                    <!-- End Buttons -->

                    <!-- Employee Info Start -->
                    <div class="Employee">
                        <div class="EmployeeInfo_Window">
                            <form method="GET">
                            <div class="EmployeeDetails">
                                <div class="TextContainer">
                                    <!-- Add any additional text or content here -->
                                </div>
                                <div class="EmployeeInfo_Columns">
                                    <div class="EmployeeInfo_Text">
                                        
                                    <p>Employee: </p>  <p class="EmployeeInformation"> 
                                            <select name=EmployeeID>
                                            <?php 
                                                while($row = mysqli_fetch_assoc($result_EmployeeSalaryPerHour)){ ?>
                                                    <?php echo '<option value='.$row['EmployeeName'].'>'; ?>
                                                    <?php echo $row['EmployeeName']; ?>
                                                    <?php echo "</option>"; ?>
                                               <?php }
                                             ?>
                                            
                                            </select></p>   
                                        <p>Rate per Hour: </p>      <p class="EmployeeInformation"> <input type="text" name="RatePerHour" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Deduction: </p>  <p class="EmployeeInformation"> 
                                            <select id="deductions1" name="deduction1">
                                            <option value="TAX">TAX</option>
                                            <option value="PAG-IBIG">PAG-IBIG</option>
                                            <option value="SSS">SSS</option>
                                            <option value="">NONE</option>
                                            </select></p>
                                        <p>Deduction: </p>  <p class="EmployeeInformation"> 
                                            <select id="deductions2" name="deduction2">
                                            <option value="NONE">NONE</option>
                                            <option value="PAG-IBIG">PAG-IBIG</option>
                                            <option value="SSS">SSS</option>
                                            <option value="TAX">TAX</option>
                                            </select></p>
                                        <p>Deduction: </p>  <p class="EmployeeInformation"> 
                                            <select id="deductions3" name="deduction3">
                                            <option value="">NONE</option>
                                            <option value="PAG-IBIG">PAG-IBIG</option>
                                            <option value="SSS">SSS</option>
                                            <option value="TAX">TAX</option>
                                            </select></p>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>                    
                    </div>

                    <!-- Download Button -->
                    <input type="submit" value="submit" name="submit" class="Download"> </input>
                    <!-- End of Download Button -->

                    <!-- End of Dashboard_Content -->
                    </form>
                    </div>

                    <div class="col-xs-12 col-md-2 Messages_Tab">
                    <!-- Messages Tab Here -->
                 </div>
             </div>
        </div>
    </body>
</html>
