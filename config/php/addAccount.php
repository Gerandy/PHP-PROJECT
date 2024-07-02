<?php 
include('connect.php');
if (isset($_GET['submit'])){

    $Firstname = $_GET["Firstname"];
    $MiddleInitial= $_GET["Middle"];
    $Lastname = $_GET["Lastname"];
    $DateofBirth = $_GET["DateofBirth"];
    $Gender = $_GET["Gender"];
    $Address = $_GET["Address"];
    $City = $_GET["City"];
    $Region = $_GET["Region"];
    $Country = $_GET["Country"];
    $Status = $_GET["Status"];
    $Nationality = $_GET["Nationality"];
    $Email = $_GET["Email"];
    $Mobile = $_GET["MobileNumber"];
    $IdentityNo = $_GET["IdentityNo"];
    

    $sql = " INSERT INTO hr_add_account (FirstName,MiddleInitial,LastName,Date_of_birth,Gender,Address,City,Region,Country,Status,Nationality,Email,Moblie_No,Identity_No) Values ('$Firstname','$MiddleInitial','$Lastname','$DateofBirth','$Gender','$Address','$City','$Region','$Country','$Status','$Nationality','$Email','$Mobile','$IdentityNo')";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("ACCOUNT SUCCESSFULLY CREATED")</script>';
    } 
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


?>