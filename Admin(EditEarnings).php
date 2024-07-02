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
    <link rel="stylesheet" href="assets\css\Admin(EditEarnings).css">
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
                    <div class="Icons_Section">
                        <img src="assets/Icon/DashBoard_Icon.png" class="Icons img-responsive">
                        <p class="Sidebar_Text">DASH<br>BOARD</p>
                    </div>
                    <div class="Icons_Section">
                        <img src="assets/Icon/EmployeesList_Icon.png" class = "Icons">
                        <p class = "Sidebar_Text"> EMPLOYEE <br> LIST </p>
                    </div>
                    <div class="Icons_Section">
                        <img src="assets/Icon/Messages_Icon.png" class = "Icons">
                        <p class = "Sidebar_Text"> MESSAGES</p>
                    </div>
                    <img src="assets/Icon/LogOut_Icon.png" class="LogOff_Icon img-responsive">
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
                  <div class="Buttons">
                      <button onclick="redirectTo('Employee(Profile_Logs).php')" class="LogsDropDown"> LOGS </button>
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
                                        <p>Rate per Hour: </p>      <p class="EmployeeInformation"> <input type="text" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Position: </p> <p class="EmployeeInformation"> <input type="text" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Salary: </p>       <p class="EmployeeInformation"> <input type="text" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Deduction: </p>  <p class="EmployeeInformation"> <input type="text" placeholder="" class="EmployeeInfoInput"> </p>
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
    </body>
</html>
