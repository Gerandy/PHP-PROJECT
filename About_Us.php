<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/About_Us.css">
</head>
<body class="body">
    <div class="col-md-12 Whole_Window">

        <div class="header">
            <div class="Logo">
                <img src="assets/Icon/UserPhoto.png" class="UserPhoto">
            </div>
            <div class="Text_Container">
                <span class="Swift_Text">SWIFT</span>
                <span class="Pay_Text">PAY</span>
            </div>
            <button class="Back_Button" onclick="redirectToLogin()">
                <img src="assets/Icon/Back_Button.png" class="Back_Button_Image">
            </button>
            <script>
                function redirectToLogin(){
                    window.location.href='Login.php';
                }
            </script>
        </div>

        
        <div class="Photo_Container">
            <p class="About_Text"> About SwiftPay: </p>
            <p class="Text"> Founded in 2024 by six innovators—Gerandy Buensuceso, Erwin Vallez, John Delos Reyes, Ken Orosco, Noer Jan Cleofe, </p>
            <p class="Text"> and Michael Gonzales—SwiftPay Solutions set out to revolutionize payroll management. Known for its user-friendly </p>
            <p class="Text"> interface and exceptional support, SwiftPay quickly became a trusted partner for small and medium-sized businesses.</p>
            <br>
            <p class="Text"> By 2015, SwiftPay had introduced real-time payroll processing, automated tax filings, and seamless accounting software </p>
            <p class="Text"> integration. Today, SwiftPay is renowned for its cutting-edge technology, ensuring accurate and timely payroll, allowing </p>
            <p class="Text"> businesses to focus on their core operations.</p> <br>

            <div class="Creator">
                <div class="image-item">
                    <img src="assets/Images/Profile.jpg" class="Creator_Photo">
                    <figcaption class="Image_Caption"> Gerandy Buensuceso </figcaption>
                </div>
                <div class="image-item">
                    <img src="assets/Images/Profile.jpg" class="Creator_Photo"> 
                    <figcaption class="Image_Caption"> Erwin Vallez </figcaption>
                </div>
                <div class="image-item">
                    <img src="assets/Images/Profile.jpg" class="Creator_Photo"> 
                    <figcaption class="Image_Caption"> John Delos Reyes </figcaption>
                </div>
            </div>

            <div class="Creator">
                <div class="image-item">
                    <img src="assets/Images/Profile.jpg" class="Creator_Photo">
                    <figcaption class="Image_Caption"> Noer Jan Cleofe </figcaption>
                </div>
                <div class="image-item">
                    <img src="assets/Images/Profile.jpg" class="Creator_Photo"> 
                    <figcaption class="Image_Caption"> Ken Orosco </figcaption>
                </div>
                <div class="image-item">
                    <img src="assets/Images/Profile.jpg" class="Creator_Photo"> 
                    <figcaption class="Image_Caption"> Michael Gonzales </figcaption>
                </div>
            </div>
                
        </div>

        <div class="Text_Container_for_Footer">
            <span class="Swift_Text_Footer"> SWIFT </span> 
            <span class="Pay_Text_Footer"> PAY </span>
            <span class="Swift_Text_Footer"> | BSIT2D </span>
        </div>
    </div>
</body>
</html>
