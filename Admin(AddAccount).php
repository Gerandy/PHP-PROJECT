<?php 
include('config/php/connect.php');
include('config/php/logincomand.php');
include('config/php/datagetter.php');
include('config/php/addAccount.php');

// $result = mysqli_query($conn, $sql_username);
// $row = mysqli_fetch_assoc($result);
// hi
// hello
?>
<!-- er -->
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
    <link rel="stylesheet" href="assets\css\Admin(AddAccount).css">

    <style>
        .Icons_Section{
            cursor: pointer;
            transition: 0.3 ease;
        }
    
        .Icons_Section:hover{
            background-color: #808080;
        }

        .AdminNotification_Scrollbar{
            height: 510px;
            overflow-y: auto;
        }

        .EmployeeInfoInput{
            width: 380px;
            height: 40px;
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
                    <div class="Icons_Section" onclick="redirectToAdminDashBoard()">
                        <img src="assets/Icon/Messages_Icon.png" class = "Icons">
                        <p class = "Sidebar_Text"> MESSAGES</p>
                    </div>
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
                  <h1>ADD ACCCOUNT</h1>
                    <!-- Employee Info Start -->
                    <div class="Employee">
                        <div class="EmployeeInfo_Window">
                            
                           <form action="" method="GET">
                            <div class="EmployeeDetails">
                                <div class="TextContainer">
                                    <!-- Add any additional text or content here -->
                                </div>
                                <div class="EmployeeInfo_Columns">
                                    <div class="EmployeeInfo_Text">
                                        <p>Firstname: </p>      <p class="EmployeeInfoInput"> <input type="text" required class="EmployeeInfoInput" name="Firstname" placeholder=""  > </p>
                                        <p>Middle Initial: </p> <p class="EmployeeInfoInput"> <input type="text" required class="EmployeeInfoInput" name="Middle" placeholder="" > </p>
                                        <p>Lastname: </p>       <p class="EmployeeInfoInput"> <input type="text" required name="Lastname" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Date of Birth: </p>  <p class="EmployeeInfoInput"> <input type="text" required name="DateofBirth" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Gender: </p>         <p class="EmployeeInfoInput"> <input type="text" required name="Gender" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Address: </p>        <p class="EmployeeInfoInput"> <input type="text" required name="Address" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>City: </p>           <p class="EmployeeInfoInput"> <input type="text" required name="City" placeholder="" class="EmployeeInfoInput"> </p>
                                    </div>
                                    <div class="EmployeeInfo_Text2">
                                        <p>Region: </p>         <p class="EmployeeInfoInput"> <input type="text" required name="Region" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Country: </p>        <p class="EmployeeInfoInput"> <input type="text" required name="Country" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Status: </p>         <p class="EmployeeInfoInput"> <input type="text" required name="Status" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Nationality:</p>     <p class="EmployeeInfoInput"> <input type="text" required name="Nationality" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Email: </p>          <p class="EmployeeInfoInput"> <input type="text" required name="Email" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Mobile Number:</p>   <p class="EmployeeInfoInput"> <input type="text" required name="MobileNumber" placeholder="" class="EmployeeInfoInput"> </p>
                                        <p>Identity No.: </p>   <p class="EmployeeInfoInput"> <input type="text" required name="IdentityNo" placeholder="" class="EmployeeInfoInput"> </p>
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
                            <div class="Notification_Panel"> 
                                <p class="Notification_Text"> NOTIFICATION </p>
                                
                                <div class="AdminNotification_Scrollbar">
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
    </body>
</html>
