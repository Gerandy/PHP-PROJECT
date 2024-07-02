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
    <link rel="stylesheet" href="assets/css/Employee(Messages).css">

    <style>
        .Icons_Section{
            cursor: pointer;
            transition: 0.3 ease;
        }
        
        .Icons_Section:hover{
            background-color: #808080;
        }
        
        .EmployeeNotification_Scrollbar{
        height: 510px;
        overflow-y: auto;
    }

        .EmployeeMessages_Scrollbar{
        height: 650px;
        overflow-y: auto;
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
                <div class="Icons_Section" onclick="redirectToEmployeeDashboard()">
                    <img src="assets/Icon/DashBoard_Icon.png" class="Icons img-responsive">
                    <p class="Sidebar_Text">DASH<br>BOARD</p>
                </div>
                
                <script>
                    function redirectToEmployeeDashboard(){
                        window.location.href='Employee(DashBoard).php';
                    }
                </script>

                <div class="Icons_Section" onclick="redirectToEmployeePaySlip()">
                    <img src="assets/Icon/PaySlip_Icon.png" class="Icons img-responsive">
                    <p class="Sidebar_Text">PAY<br>SLIP</p>
                </div>
                
                <script>
                    function redirectToEmployeePaySlip(){
                        window.location.href='Employee(PaySlip).php';
                    }
                </script>

                <div class="Icons_Section" onclick="redirectToEmployeePaySlipHistory()">
                <img src="assets/Icon/History_Icon.png" class="Icons img-responsive">
                <p class="Sidebar_Text">HISTORY</p>
                </div>

                <script>
                    function redirectToEmployeePaySlipHistory(){
                        window.location.href='Employee(PaySlip_History).php';
                    }
                </script>

                <div class="Icons_Section" onclick="redirectToEmployeeProfile()">
                <img src="assets/Icon/Profile_Icon.png" class="Icons img-responsive">
                <p class="Sidebar_Text">PROFILE</p>
                </div>
                <script>
                    function redirectToEmployeeProfile(){
                        window.location.href='Employee(Profile_EmployeeInfo).php';
                    }
                </script>

                <div class="Icons_Section" onclick="redirectToEmployeeMessages()">
                <img src="assets/Icon/Messages_Icon.png" class="Icons img-responsive">
                <p class="Sidebar_Text">MESSAGES</p>
                </div>

                <script>
                    function redirectToEmployeeMessages(){
                        window.location.href='Employee(Messages).php';
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
                <!-- Earnings Start -->
                <div class="Messages">
                    <div class="Messages_Window">
                        <div class="TitleContainer">
                            <p class="Title"> MESSAGES </p>
                        </div>
                        <div class="EmployeeMessages_Scrollbar">
                        <div class="Table_PaySlip_Receipt">
                            <table class="LogTable clickableTable"> 
                                <tr>
                                    <th class="Date Text"> FROM: "HR NAME"</th>
                                </tr> 
                                <tr>
                                    <td colspan="2" class="Text"> <img src="assets/images/Profile.jpg" class="Profile_Photo"> <span class="Log_Text">Your request to change your PASSWORD is approved! </span>   </td>
                                </tr>
                            </table>
                            <table class="LogTable clickableTable"> 
                                <tr>
                                    <th class="Date Text"> FROM: "HR NAME"</th>
                                </tr> 
                                <tr>
                                    <td colspan="2" class="Text"> <img src="assets/images/Profile.jpg" class="Profile_Photo"> <span class="Log_Text">Your request to change your PASSWORD is approved! </span>   </td>
                                </tr>
                            </table>
                            <table class="LogTable clickableTable"> 
                                <tr>
                                    <th class="Date Text"> FROM: "HR NAME"</th>
                                </tr> 
                                <tr>
                                    <td colspan="2" class="Text"> <img src="assets/images/Profile.jpg" class="Profile_Photo"> <span class="Log_Text">Your request to change your PASSWORD is approved! </span>   </td>
                                </tr>
                            </table>
                            <table class="LogTable clickableTable"> 
                                <tr>
                                    <th class="Date Text"> FROM: "HR NAME"</th>
                                </tr> 
                                <tr>
                                    <td colspan="2" class="Text"> <img src="assets/images/Profile.jpg" class="Profile_Photo"> <span class="Log_Text">Your request to change your PASSWORD is approved! </span>   </td>
                                </tr>
                            </table>
                            <table class="LogTable clickableTable"> 
                                <tr>
                                    <th class="Date Text"> FROM: "HR NAME"</th>
                                </tr> 
                                <tr>
                                    <td colspan="2" class="Text"> <img src="assets/images/Profile.jpg" class="Profile_Photo"> <span class="Log_Text">Your request to change your PASSWORD is approved! </span>   </td>
                                </tr>
                            </table>
                            <table class="LogTable clickableTable"> 
                                <tr>
                                    <th class="Date Text"> FROM: "HR NAME"</th>
                                </tr> 
                                <tr>
                                    <td colspan="2" class="Text"> <img src="assets/images/Profile.jpg" class="Profile_Photo"> <span class="Log_Text">Your request to change your PASSWORD is approved! </span>   </td>
                                </tr>
                            </table>
                        </div>
                        </div>
                    </div>                    
                </div>
                


                <!-- End of Dashboard_Content -->
            </div>
            
            <div class="col-xs-12 col-md-2 Messages_Tab">
                <!-- Messages Tab Here -->
                    <div class="Notification_Panel"> 
                        <p class="Notification_Text"> NOTIFICATION </p>
                        
                        <div class="EmployeeNotification_Scrollbar">
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

                        <table class="NotificationTable">
                            <tr class="Notif">
                                <th  class="Notif_Text"> ANNOUNCEMENT </th>
                            </tr>
                            <tr class="Notif">
                                <td class="Notif_Message"> New Announcemnet </td>
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

    <!-- Pop Up Form -->
    <div class="form-popup" id="myForm">
        <div class="form-container">
            <form class="Memo">
                <p class="DateText"> 07 - 03 - 2024 </p>
                <div class="message-container">
                    <img src="assets/images/Profile.jpg" class="Sender_Profile">
                    <p class="Note"> FROM: "HR NAME" <br>
                    Your request to change your PASSWORD is approved!
                    </p>
                </div>

                <div class="MessageBox">
                    <p class="Mail">
                        Subject: Password Change Request Approved
                        <br>
                        Hi [Employee Name],
                        <br>
                        <br>
                        Your request to change your password has been approved. Please proceed with updating it as needed.
                        <br> <br>
                        Link to change your Password: <br>
                        https//Bastalink.com <br> <br>

                        Best regards, <br>
                        [HR name] <br>
                        Human Resources. <br>
                    </p>
                </div>
                
            </form>
            <button type="submit" class="SubmitButton"> MARK AS READ </button>
            <button type="button" class="BackButton" onclick="closeForm()"> BACK </button>
        </div>
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
            
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }

        // Attach event listeners to all tables with the class "clickableTable"
        document.querySelectorAll('.clickableTable').forEach(table => {
            table.addEventListener('click', openForm);
        });
    </script>
</body>
</html>
