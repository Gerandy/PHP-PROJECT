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
    <link rel="stylesheet" href="assets\css\Payslip(Admin).css">

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

    <!-- Header -->
    <div class="Dashboard_Header"> 
        <p class="Swift_Text">SWIFT</p>
        <p class="Pay_Text">PAY</p>
    </div>


    <!-- Side Bar -->
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
                <div class="Icons_Section">
                    <img src="assets/Icon/Messages_Icon.png" class = "Icons">
                    <p class = "Sidebar_Text"> MESSAGES</p>
                </div>
                <img src="assets/Icon/LogOut_Icon.png" class="LogOff_Icon img-responsive">
            </div>

            <div class="col-xs-12 col-sm-9 col-md-8 Dashboard_Content">
            <!-- Dashboard Content Here -->

                <!-- Drop Downs (Month, Semi, Pending) -->
                <div class="dropdown">
                    <button onclick="toggleMonthDropdown()" class="MonthDropDown"> MONTH </button>
                    <div id="Month" class="dropdown-content">
                        <a href="#"> January </a>
                        <a href="#"> February </a>
                        <a href="#"> March </a>
                        <a href="#"> April </a>
                        <a href="#"> May </a>
                        <a href="#"> June </a>
                        <a href="#"> July </a>
                        <a href="#"> August </a>
                        <a href="#"> September </a>
                        <a href="#"> October </a>
                        <a href="#"> November </a>
                        <a href="#"> December </a>
                    </div>
                </div>
                <div class="dropdown">
                    <button onclick="toggleSemiMonthlyDropdown()" class="SemiMonthlyDropDown"> SEMI-MONTHLY </button>
                    <div id="Semi-Monthly" class="dropdown-content">
                        <a href="#"> 1-15 </a>
                        <a href="#"> 15-31 </a>
                    </div>
                </div>
 
                <!-- End  Drop Downs -->

                <!-- Pay Slip Receipt -->
                <div class="Receipt">
                    <div class="PaySlip">

                        <!-- Start  Payslip Table -->
                        <div class="Table_PaySlip_Receipt">
                            <table>  
                                <tr>
                                    <th class="Date Text"> 01-01-2024 </th>
                                    <th class="Table_Title TextHighLight"> PAY SLIP RECEIPT </th>
                                    <th class="Table_Title TextHighLight"></th>
                                    <th class="Receipt_Code Text"> RECEIPT CODE: 001 </th>
                                </tr>
                                <tr>
                                    <td colspan="1"  class="Text"> EMPLOYEE NAME: </td>
                                    <td colspan="1" class="Text"> --- </td>
                                    <td colspan="1" class="Text"> Hourly Rate: </td>
                                    <td colspan="1" class="Text"> --- </td>
                                </tr>
                                <tr>
                                    <td colspan="1" class="Text"> DEPARTMENT: </td>
                                    <td colspan="2" class="Text"> --- </td>
                                    <td colspan=""></td>
                                </tr>
                                <tr>
                                    <td colspan="1" class="Text"> EMPLOYEE ID: </td>
                                    <td colspan="2" class="Text"> --- </td>
                                    <td colspan=""></td>
                                </tr>
                                <tr>
                                    <td colspan="1" class="Text"> DATE: </td>
                                    <td colspan="2" class="Text"> --- </td>
                                    <td colspan=""></td>
                                </tr>
                            </table>
                        </div>

                        <div class="Earning_And_Deduction_Table">
                            <div class="Table_Payslip_Earnnings">
                                <table>  
                                    <tr>
                                        <th class="Earning Text"> EARNING </th>
                                        <th class="Amount Text"> AMOUNT </th>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr > 
                                        <td colspan="1"  class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>               
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> TOTAL EARNING </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> NET PAY </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="Table_Payslip_Deduction">
                                <table>  
                                    <tr>
                                        <th class="Deduction Text"> DEDUCTION </th>
                                        <th class="Amount Text"> AMOUNT </th>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> --- </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="Text"> TOTAL DEDUCTION </td>
                                        <td colspan="1" class="Amount Text"> --- </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Download Button -->
                <button class="Back_Button"> EMPLOYEE DETAILS </button>
                <button class="Apply_Button"> APPLY</button>
                <button class="Employee_Button">BACK</button>
                <!-- End of Download Button -->

                <!-- End of Dashboard_Content -->
            </div>
            
            <div class="col-xs-12 col-md-2 Messages_Tab">
                <!-- Messages Tab Here -->
                    <div class="Notification_Panel"> 
                        <p class="Notification_Text"> NOTIFICATION </p>

                        <table class="NotificationTable">
                            <tr class="Notif">
                                <th class="Notif_Text"> NEW MESSAGE </th>
                            </tr>
                            <tr>
                                <td class="Notif_Message"> You have a new Message </td>
                            </tr>
                        </table>

                        <table class="NotificationTable">
                            <tr class="Notif">
                                <th  class="Notif_Text"> NEW MESSAGE </th>
                            </tr>
                            <tr class="Notif">
                                <td class="Notif_Message"> You have a new Message </td>
                            </tr>
                        </table>

                        <table class="NotificationTable">
                            <tr class="Notif">
                                <th  class="Notif_Text"> ANNOUNCEMENT </th>
                            </tr>
                            <tr class="Notif">
                                <td class="Notif_Message"> New Announcemnet </td>
                            </tr>
                        </table>
                    </div>

                    <div class="About_User">
                        <img src="assets/images/Profile.jpg" class="UserImage">
                        <div class="MessagesTab_Text">
                            <p class="About_User_Text"> 202210178</p>
                            <p class="About_User_Text"> ACCOUNT USERNAME </p>
                            <br>
                            <p class="About_User_Text"> CUSTOMER SERVICE</p>
                            <p class="Position_Text"> SUPPORT SPECIALIST </p>
                        </div>
                    </div>                     
                <!-- End of Messages Tab  -->
            </div>
        </div>
    </div>

    <!-- DropDown Javascript -->
    <script>
        /* Toggle the month dropdown content */
        function toggleMonthDropdown() {
            document.getElementById("Month").classList.toggle("show");
        }
        
        /* Toggle the semi-monthly dropdown content */
        function toggleSemiMonthlyDropdown() {
            document.getElementById("Semi-Monthly").classList.toggle("show");
        }

        function togglePendingDropdown() {
            document.getElementById("Pending").classList.toggle("show");
        }

        // Close the dropdowns if the user clicks outside of them
        window.onclick = function(event) {
            if (!event.target.matches('.MonthDropDown')) {
                var monthDropdown = document.getElementById("Month");
                if (monthDropdown.classList.contains('show')) {
                    monthDropdown.classList.remove('show');
                }
            }
            if (!event.target.matches('.SemiMonthlyDropDown')) {
                var semiMonthlyDropdown = document.getElementById("Semi-Monthly");
                if (semiMonthlyDropdown.classList.contains('show')) {
                    semiMonthlyDropdown.classList.remove('show');
                }
            }
            if (!event.target.matches('.PendingDropDown')) {
                var semiMonthlyDropdown = document.getElementById("Pending");
                if (semiMonthlyDropdown.classList.contains('show')) {
                    semiMonthlyDropdown.classList.remove('show');
                }
            }
        }
    </script>
    <!-- End of DropDown Javascript -->
</body>
</html>
