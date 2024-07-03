<?php 
$_SESSION['username'] = "";
include('connect.php');

include_once('datagetter.php');

$sql_EmployeeSalaryPerHour = "SELECT * FROM editearningperhour;";
$result_EmployeeSalaryPerHour = mysqli_query($conn, $sql_EmployeeSalaryPerHour);


// $sql_editearningperhour = "select login.EmployeeID, editearningperhour.ratePerHour from login inner join editearningperhour on login.EmployeeID = editearningperhour.EmployeeID where username = '$usern';";
// $result_editearningperhour = mysqli_query($conn, $result_editearningperhour);
function add($perhour,$days){

    return $perhour * $days;

}

function minus($perhour,$daysabsent){

    return $perhour * 15 - $daysabsent *$perhour;
}



function perfect($perhour){

    return $perhour * 15;

}


function februarypay($perhour){

    return $perhour * 14;

}

function thirtyone($perhour){

    return $perhour * 15.5;
}


    
    if (isset($_POST['submit'])){

        $usern = $_POST['EmployeeID'];
        $date = $_POST['months'];
        $absent = $_POST['absent'];
        $cal = $_POST['calcu'];
        
        
        
        

        if($cal == "a"){
            $_SESSION['totalAmount'] = thirtyone($usern);
            $sum = $_SESSION['totalAmount'];
            echo  $sum;
            $present = 15 - $absent;
            $receipt = "0";
            

            $sql = "INSERT INTO employee_earning_payslip(Receipt_Code,Earning,Amount,Total_Earning,NetPay) VALUES ('$receipt','$present','$sum','$sum','$sum')";
            if (mysqli_query($conn, $sql)) {    
                echo '<script>alert("SALARY SUCCESSFULLY UPDATED")</script>';
            } 
            else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            
        }


    }
}


?>


<html> 
<body>
<label> <h1>this is where you put the pay </h1></label>
    <form method="POST">                
            <p><label>Employee: </label>   
                    <select class="dropdown" name=EmployeeID>
                    <?php 
                        while($row = mysqli_fetch_assoc($result_EmployeeSalaryPerHour)){ ?>
                            <?php echo '<option value='.$row['ratePerHour'].'>'; ?>
                            <?php echo $row['username']; ?>
                            <?php echo "</option>"; ?>
                        <?php } ?>
                       
                        
                    </select></p> 
                    Date:<select class="months" name="months" >
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="Novermber">Novermber</option>
                        <option value="December">December</option>
                        </select></p> </button>   
                        <label>DAYS OF ABSENT: </label>  <input type="number" name="absent" required> <br><br>
                        how many days in month:<select class="months" name="calcu" >
                        <option value="a">31 Days</option>
                        <option value="b">28 Days</option>
                        <option value="c">30 Days</option>
                        <option value="d">29 Days</option>
                        </select></p> </button>   
                    <br><input type="submit" value="submit" name="submit">           
    </form>


</body>
</html>