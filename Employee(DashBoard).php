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
    <link rel="stylesheet" href="assets/css/Employee(DashBoard).css">
    <style>
        .Notification_Scroll_Bar{
            overflow-y: scroll;
            height:510px;
        }
    </style>


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


    </style>

</head>
    <body class="body">
        <!-- Side Bar -->
        <div class="Dashboard_Header"> 
            <div class="HeaderText">
                <p class="Swift_Text">SWIFT</p>
                <p class="Pay_Text">PAY</p>
            </div>
            <div class="watch">
                <div class="timer">
                    <span id="clocktime" > </span>
                </div>
            </div>            
        </div>

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-xs-3 col-xs-2 sidebar">
                    <img src="assets/Icon/UserPhoto.png" class="UserPhoto img-responsive">
                    <div class="Icons_Section" onclick="redirectToEmployeeDashBoard()">
                        <img src="assets/Icon/DashBoard_Icon.png" class="Icons img-responsive">
                        <p class="Sidebar_Text">DASH<br>BOARD</p>
                    </div>

                    <script>
                        function redirectToEmployeeDashBoard(){
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

                    <div class="Icons_Section" onclick="redirectToEmployeeProfile('Employee(Profile_EmployeeInfo).php')">
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

                <div class="col-xs-12 col-xs-9 col-xs-8 Dashboard_Content">
                    <!-- Dashboard Content Here -->
                    <div class="AccountGreeting">
                        <p class="Dashboard_Text"> WELCOME </p> <br>
                        <p class="Dashboard_Text Employee"> <?php echo $_SESSION['FirstName']." ".$_SESSION['MiddleInitial']." ".$_SESSION['LastName'] ; ?> </p>
                    </div>
                    <div class="Main_Container">
                        <div class="Image_Carousel">
                            <img src="assets/images/ImageCarousel_1.jpg" class="Image">
                        </div>
                        <div class="Right_Side_Container">
                            <div class="Calendar_Container">
                                <!-- Calendar widget start -->
                                <div class="calendar">
                                    <div class="calendar-header">
                                        <button class="prev-month" onclick="prevMonth()">‹</button>
                                        <div class="month-year">
                                            <span class="month"></span>
                                            <span class="year"></span>
                                        </div>
                                        <button class="next-month" onclick="nextMonth()">›</button>
                                    </div>
                                    <div class="calendar-body">
                                        <div class="day-names">
                                            <div class="day">Sun</div>
                                            <div class="day">Mon</div>
                                            <div class="day">Tue</div>
                                            <div class="day">Wed</div>
                                            <div class="day">Thu</div>
                                            <div class="day">Fri</div>
                                            <div class="day">Sat</div>
                                        </div>
                                        <div class="days">
                                            <!-- Days will be populated here -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Calendar widget end -->
                            </div>

                            <div class="Clock_Container">
                                <!-- Clock widget Start -->
                                <div class="clock">
                                    <div class="background">
                                        <div class="time" id="time"></div>
                                        <div class="date" id="date"></div>
                                    </div>
                                </div>
                                <!-- Clock widget End -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-xs-2 Messages_Tab">
                    <!-- Messages Tab Here -->
                    <div class="Messages_Window" >
                        
                        <div class="Notification_Panel"> 

                            <p class="Notification_Text"> NOTIFICATION </p>                    

                            <div class="Notification_Scroll_Bar">
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
                    </div>
                    <!-- End of Messages Tab  -->
                </div>

                <!-- Javascript for calendar widget -->
                <script>
                    // clock header
                    function updateClock() {
                        const now = new Date();
                        let hours = now.getHours();
                        const minutes = String(now.getMinutes()).padStart(2, '0');
                        const ampm = hours >= 12 ? 'PM' : 'AM';
                        hours = hours % 12;
                        hours = hours ? hours : 12;

                        const timeString = `${hours}:${minutes} ${ampm}`;
                        document.getElementById('clocktime').textContent = timeString;
                    }

                    setInterval(updateClock, 1000);
                    updateClock();

                    //Calendar Widget 
                    const calendarHeaderMonth = document.querySelector('.month');
                    const calendarHeaderYear = document.querySelector('.year');
                    const calendarDays = document.querySelector('.days');

                    let currentMonth = new Date().getMonth();
                    let currentYear = new Date().getFullYear();

                    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

                    function getDaysInMonth(month, year) {
                        return new Date(year, month + 1, 0).getDate();
                    }

                    function getFirstDayOfMonth(month, year) {
                        return new Date(year, month, 1).getDay();
                    }

                    function updateCalendar() {
                        const timeZone = 'Asia/Manila';
                        const now = new Date();
                        const today = new Date().toLocaleDateString('en-US', { timeZone });

                        calendarHeaderMonth.textContent = monthNames[currentMonth];
                        calendarHeaderYear.textContent = currentYear;

                        const daysInMonth = getDaysInMonth(currentMonth, currentYear);
                        const firstDay = getFirstDayOfMonth(currentMonth, currentYear);

                        calendarDays.innerHTML = '';

                        for (let i = 0; i < firstDay; i++) {
                            const emptyDiv = document.createElement('div');
                            emptyDiv.classList.add('day');
                            calendarDays.appendChild(emptyDiv);
                        }

                        for (let i = 1; i <= daysInMonth; i++) {
                            const dayDiv = document.createElement('div');
                            dayDiv.classList.add('day');
                            dayDiv.textContent = i;
                            const dayDate = new Date(currentYear, currentMonth, i).toLocaleDateString('en-US', { timeZone });

                            if (dayDate === today) {
                                dayDiv.classList.add('current-day');
                            }

                            calendarDays.appendChild(dayDiv);
                        }
                    }

                    function prevMonth() {
                        if (currentMonth === 0) {
                            currentMonth = 11;
                            currentYear--;
                        } else {
                            currentMonth--;
                        }
                        updateCalendar();
                    }

                    function nextMonth() {
                        if (currentMonth === 11) {
                            currentMonth = 0;
                            currentYear++;
                        } else {
                            currentMonth++;
                        }
                        updateCalendar();
                    }

                    updateCalendar();
                    //End Calendar Widget

                    //Clock Widget
                    function updateTime() {
                    const now = new Date();
                    const hours = String(now.getHours()).padStart(2, '0');
                    const minutes = String(now.getMinutes()).padStart(2, '0');
                    const seconds = String(now.getSeconds()).padStart(2, '0');
                
                    const timeString = `${hours}:${minutes}:${seconds}`;
                    document.getElementById('time').textContent = timeString;
                
                    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                    const dateString = now.toLocaleDateString('en-PH', options);
                    document.getElementById('date').textContent = dateString;
                    }
                    
                    setInterval(updateTime, 1000);
                    updateTime();
                    //End of Clock Widget

                </script>
                <!-- End of Javascript for calendar widget -->
            </div>
        </div>
    </body>
</html>