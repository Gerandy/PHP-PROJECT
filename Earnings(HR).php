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
    <link rel="stylesheet" href="assets/css/Earnings(HR).css">

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
                    <div class="Icons_Section" onclick="redirectToDashboard()">
                        <img src="assets/Icon/DashBoard_Icon.png" class="Icons img-responsive">
                        <p class="Sidebar_Text">DASH<br>BOARD</p>
                    </div>

                    <script>
                        function redirectToDashboard(){
                            window.location.href ='HR(DashBoard).php';
                        }
                    </script>

                    </a>
                    <div class="Icons_Section" onclick="redirectToEmployeeList()">
                        <img src="assets/Icon/EmployeesList_Icon.png" class = "Icons">
                        <p class = "Sidebar_Text"> EMPLOYEE <br> LIST </p>
                    </div>

                    <script>
                        function redirectToEmployeeList(){
                            window.location.href='EmployeeList(Hr).php';
                        }
                    </script>

                    <div class="Icons_Section" onclick="redirectTo">
                        <img src="assets/Icon/Messages_Icon.png" class = "Icons">
                        <p class = "Sidebar_Text"> MESSAGES</p>
                    </div>
                    <img src="assets/Icon/LogOut_Icon.png" class="LogOff_Icon img-responsive">
                </div>

                <div class="col-xs-12 col-sm-9 col-md-8 Dashboard_Content">
                    <!-- Dashboard Content Here -->
                    <!-- Dito mo lagay delosreyes mga gawa mo-->
                    <div class="Buttons">
                        <button onclick="redirectToEmployeeInfo()" class="EmployeeInfoDropDown"> EMPLOYEE INFO </button>
                        <script>
                        function redirectToEmployeeInfo(){
                            window.location.href ='Employee(Profile_EmployeeInfo).php'
                        }
                        </script>
                    </div>
                    <div class="Buttons">
                        <button onclick="redirectToEmployeeProfileEarning()" class="EarningsDropDown"> EARNINGS </button>
                        <script>
                        function redirectToEmployeeProfileEarning(){
                            window.location.href ='Employee(Profile_Earning).php'
                        }
                        </script>
                    </div>
                  <div class="Buttons">
                      <button onclick="redirectToEmployeeProfileLogs()" class="LogsDropDown"> LOGS </button>
                      <script>
                        function redirectToEmployeeProfileLogs(){
                            window.location.href ='Employee(Profile_Logs).php'
                        }
                        </script>
                  </div>
                    <!-- End Buttons -->

                    <!-- Employee Info Start -->
                    <div class="Employee">
                        <div class="EmployeeInfo_Window">
                            <div class="EmployeePhoto_Container">
                                <img src="assets/images/Profile.jpg" class="EmployeePhoto">
                                <p class="EmployeeName_Text">Employee Name</p>
                            </div>
                            <div class="EmployeeDetails">
                                <div class="TextContainer">
                                    <!-- Add any additional text or content here -->
                                </div>
                                <div class="EmployeeInfo_Columns">
                                    <div class="EmployeeInfo_Text">
                                        <p>Rate per Hour: </p>      <p class="EmployeeInformation"> --- </p>
                                        <p>Position: </p> <p class="EmployeeInformation"> --- </p>
                                        <p>Salary: </p>       <p class="EmployeeInformation"> --- </p>
                                        <p>Deduction: </p>  <p class="EmployeeInformation"> --- </p>
                                    </div>

                                </div>
                            </div>
                        </div>                    
                    </div>

                    <!-- Download Button -->
                    
                    <!-- End of Download Button -->

                    <!-- End of Dashboard_Content -->
                    </div>

                    <div class="col-xs-12 col-md-2 Messages_Tab">
                    <!-- Messages Tab Here -->
                 </div>
             </div>
        </div>
    </body>
</html>
