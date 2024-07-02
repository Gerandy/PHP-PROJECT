<html>
<body>
    <?php 
        
     $server = "localhost";
     $username = "root";
     $password = "";
     $dbname = "payroll";
     
     $conn = new mysqli($server, $username, $password, $dbname);
     if ($conn->connect_error) {
        die("connect failed". $conn->connect_error);
     }
        
    ?>
</body>
</html>