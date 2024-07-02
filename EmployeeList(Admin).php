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
    <link rel="stylesheet" href="assets\css\EmployeeList(Admin).css">

    <style>
        .Icons_Section{
            cursor: pointer;
            transition: 0.3 ease;
        }
    
        .Icons_Section:hover{
            background-color: #808080;
        }

        .inside{
            cursor: pointer;
            transition: color 0.3 ease-in-out;

        }

        .AdminNotification_Scrollbar{
            height: 510px;
            overflow-y: auto;
        }

        .AdminListOfEmployee_Scrollbar{
            height: 580px;
            overflow-y: auto;
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
                            window.location.href='Admin(DashBoard).html';
                        }
                    </script>
                    <div class="Icons_Section" onclick="redirectToEmployeeListAdmin()">
                        <img src="assets/Icon/EmployeesList_Icon.png" class = "Icons">
                        <p class = "Sidebar_Text"> EMPLOYEE <br> LIST </p>
                    </div>
                    <script>
                        function redirectToEmployeeListAdmin(){
                            window.location.href='EmployeeList(Admin).html';
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
                            window.location.href='Login.html';
                        }
                    </script>
    
                </div>

                <div class="col-xs-12 col-sm-9 col-md-8 Dashboard_Content">
                    <!-- Dashboard Content Here -->
                    <!-- Dito mo lagay delosreyes mga gawa mo-->
                          <div class="top">
                           <h2>LIST OF EMPLOYEE</h2>
                            <div class="search"><input type="text" name="search" placeholder="Search" class="sr"></div>
                         </div> 

                           <div class="mid">
                             <div class="t">
                             <div class="text"><h3>PROFILE</h3> </div>
                              <div class="text"> <h3>EMPLOYEE ID</h3> </div>
                             <div class="text"><h3>EMPLOYEE NAME</h3> </div>
                               <div class="text"><h3>DEPARTMENT</h3> </div>
                                 <div class="text"><h3>POSITION</h3> </div>
                             </div>

                             <div class="AdminListOfEmployee_Scrollbar">
                             <div class="inside" onclick="redirectToEmployeeDetailsAdmin()">
                                <div class="text"></div>
                                <div class="text"><p> --- </p></div>
                                <div class="text"><p> --- </p></div>
                                <div class="text"><p> --- </p></div>
                                <div class="text"><p> --- </p></div>
                             </div>
                             <script>
                                function redirectToEmployeeDetailsAdmin(){
                                    window.location.href='Employee details (ADMIN).html';
                                }
                             </script>

                             
                               <div class="inside">

                                <!-- add button admin // pwede i comment nalang din para mawala yung add button  -->
                                <div class="text"><p></p></div>
                                <div class="text"><p> <a href="Admin(AddAccount).html"><img src="assets/Icon/plus.png" class="plus"></a></p></div>
                                <div class="text"><p></p></div>
                                <div class="text"><p></p></div>
                             </div>
                            </div>
                           </div>
                </div>

                <div class="col-xs-12 col-md-2 Messages_Tab">
                    <!-- Messages Tab Here -->
                        <div class="Notification_Panel"> 
                            <p class="Notification_Text"> NOTIFICATION </p>
                            
                            <div class="AdminNotification_Scrollbar">
                            <table>
                                <tr>
                                    <th> NEW MESSAGE </th>
                                </tr>
                                <tr>
                                    <td> You have a new Message </td>
                                </tr>
                            </table>

                            <table>
                                <tr>
                                    <th> NEW MESSAGE </th>
                                </tr>
                                <tr>
                                    <td> You have a new Message </td>
                                </tr>
                            </table>

                            <table>
                                <tr>
                                    <th> ANNOUNCEMENT </th>
                                </tr>
                                <tr>
                                    <td> New Announcemnet </td>
                                </tr>
                            </table>

                            <table>
                                <tr>
                                    <th> ANNOUNCEMENT </th>
                                </tr>
                                <tr>
                                    <td> New Announcemnet </td>
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
    </body>
</html>
