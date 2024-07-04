<?php 
include('config/php/connect.php');
include('config/php/logincomand.php');
include('config/php/datagetter.php');

// $result = mysqli_query($conn, $sql_username);
// $row = mysqli_fetch_assoc($result);

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
    <link rel="stylesheet" href="assets/css/Employee(Profile_Earning).css">

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

</style>

</head>
<body class="body">
<?php






?>
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
                <div class="Icons_Section" onclick="redirectTo('Employee(DashBoard).php')">
                    <img src="assets/Icon/DashBoard_Icon.png" class="Icons img-responsive">
                    <p class="Sidebar_Text">DASH<br>BOARD</p>
                </div>
                <div class="Icons_Section" onclick="redirectTo('Employee(PaySlip).php')">
                    <img src="assets/Icon/PaySlip_Icon.png" class="Icons img-responsive">
                    <p class="Sidebar_Text">PAY<br>SLIP</p>
                </div>
                <div class="Icons_Section" onclick="redirectTo('Employee(PaySlip_History).php')">
                    <img src="assets/Icon/History_Icon.png" class="Icons img-responsive">
                    <p class="Sidebar_Text">HISTORY</p>
                </div>
                <div class="Icons_Section" onclick="redirectTo('Employee(Profile_EmployeeInfo).php')">
                    <img src="assets/Icon/Profile_Icon.png" class="Icons img-responsive">
                    <p class="Sidebar_Text">PROFILE</p>
                </div>
                <div class="Icons_Section" onclick="redirectTo('Employee(Messages).php')">
                    <img src="assets/Icon/Messages_Icon.png" class="Icons img-responsive">
                    <p class="Sidebar_Text">MESSAGES</p>
                </div>
                <div class="Icons_Section" onclick="redirectTo('Login.php')">
                <img src="assets/Icon/LogOut_Icon.png" class="LogOff_Icon img-responsive">
                </div>
            </div>

            <div class="col-xs-12 col-sm-9 col-md-8 Dashboard_Content">
            <!-- Dashboard Content Here -->

                <!-- Buttons (EmployeeInfo, Earnings, Log) -->
                <div class="Buttons">
                    <button onclick="redirectTo('Employee(Profile_EmployeeInfo).php')" class="EmployeeInfoDropDown"> EMPLOYEE INFO: </button>
                </div>
                <div class="Buttons">
                    <button onclick="redirectTo('Employee(Profile_Earning).php')" class="EarningsDropDown"> EARNINGS: </button>
                </div>
                <div class="Buttons">
                    <button onclick="redirectTo('Employee(Profile_Logs).php')" class="LogsDropDown"> LOGS: </button>
                </div>
                <!-- End Buttons -->

                <!-- Earnings Start -->
                <div class="Employee">
                    <div class="EmployeeInfo_Window">
                        <div class="EmployeePhoto_Container">
                            <img src="assets/images/Profile.jpg" class="EmployeePhoto">
                            <p class="EmployeeName_Text"><?php echo $_SESSION['EmployeeName']?></p>
                        </div>
                        <div class="EmployeeDetails">
                            <div class="EmployeeInfo_Columns">
                                <div class="EmployeeInfo_Text">
                                    <p>Rate Per Hour: </p>      <p class="EmployeeInformation"> <?php echo $_SESSION['Rate_per_hour']?> </p>
                                    <p>Position: </p>           <p class="EmployeeInformation"> <?php echo $_SESSION['Position']?> </p>
                                    <p>Salary: </p>             <p class="EmployeeInformation"> <?php echo $_SESSION['Salary']?> </p>
                                    
                                </div>
                                <div class="EmployeeInfo_Text2">
                                    <p>Deductions: </p>         <p class="EmployeeInformation"> <?php echo $_SESSION['Deductions']?> </p>
                                                                <p class="EmployeeInformation"> <?php echo $_SESSION['Deductions2']?> </p>
                                                                <p class="EmployeeInformation"> <?php echo $_SESSION['Deductions3']?> </p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>


<!-- we -->
                <!-- End of Dashboard_Content -->
            </div>
            
            <div class="col-xs-12 col-md-2 Messages_Tab">
                <!-- Messages Tab Here -->
                    <div class="Notification_Panel"> 
                    <p class="Notification_Text"> NOTIFICATION </p>
                       
                       <div class="EmployeeNotification_Scrollbar">
                       <?php  
                       while($row = mysqli_fetch_assoc($result_message)){
                           echo "<table class= NotificationTable>";
                           
                           echo  "<tr class= Notif>";
                           echo     "<th class= Notif_Text>";
                                       
                           echo $row['fromName'];
                                       
                           echo       "</th>";
                           echo    "</tr>";
                           echo    "<trclass= Notif>";
                           echo        "<td class= Notif_Message>";
                                   

                           echo $row['Message'];
                                   
                                   
                                   
                           echo       "</td>";
                           echo    "</tr>";
                           echo "</table>";
                       }
                   
                       ?>
                    </div>
                    </div>

                    <div class="About_User">
                        <img src="assets/images/Profile.jpg" class="UserImage">
                        <div class="MessagesTab_Text">
                        <p class="About_User_Text"> <?php 
                                echo  $_SESSION['Identity_No'];
                                ?></p>
                                <p class="About_User_Text"> <?php 

                                echo $_SESSION['FirstName'];
                                
                                ?> </p>
                                <br>
                                <p class="About_User_Text"> <?php 

                                echo $_SESSION['Position'];
                                
                                ?></p>
                                <p class="Position_Text"> <?php 

                                echo $_SESSION['Department'];
                                
                                ?> </p>
                        </div>
                    </div>                     
                <!-- End of Messages Tab  -->
            </div>
        </div>
    </div>
    <!-- End of DropDown Javascript -->

    <!-- Javascript for button redirect -->
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
     <!-- End of Javascript for button redirect -->
</body>
</html>
