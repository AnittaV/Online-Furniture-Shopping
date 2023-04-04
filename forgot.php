<?php
session_start();
include 'db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if (isset($_POST['send_otp'])) {
    $Email = $_POST['email'];
    $checkMail = "SELECT * FROM `tbl_userreg` WHERE `email`='$Email'";
    $result = mysqli_query($con, $checkMail);
    $rsltCheck = mysqli_num_rows($result);

    if ($rsltCheck > 0) {
        $_SESSION['Email'] = $Email;
        $code = rand(999999, 111111);
        $insert_otp = "UPDATE `tbl_userreg` SET `otp_value`='$code' WHERE `email`='$Email'";
        $data_check = mysqli_query($con, $insert_otp);

        if ($data_check) {
            $mail = new PHPMailer(true);
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'anittavarghese2023a@mca.ajce.in';                
            $mail->Password   = 'rmca2021#';                              
            $mail->SMTPSecure = 'ssl';      
            $mail->Port       = 465;  

            $mail->setFrom('anittavarghese2023a@mca.ajce.in', 'Online Furniture Shopping');
            $mail->addAddress($Email);     
            $mail->isHTML(true);                        
            $mail->Subject = 'Forgot Password - OTP Verification';
            $mail->Body = "Need to reset your password? <br><br> Use your secret code! <br><br> <strong>$code</strong>";

            if ($mail->send()) {
                echo '<script> alert ("OTP sent successfully");</script>';
                echo '<script>window.location.href="otp_value.php";</script>';
            } else {
                echo '<script> alert ("OTP sent failed");</script>';
                echo '<script>window.location.href="forgot.php";</script>';
            }
        }
    } else {
        echo '<script> alert ("The user doesnot exist!");</script>';
        echo '<script>window.location.href="forgot.php";</script>';
    }
}
?>
?>

<head>
<script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Online furniture</title>
    <link rel="stylesheet" type="text/css" href="loginpage.css?v=<?php echo time(); ?>">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            null
        };
    </script> -->
</head>



<body style="background-image:url('./img/fur1.jpg');">
    <fieldset>
        <form method="POST" name="myform" style="margin-top:10%;" action=""><br>
            <center>
                <h1>Forgot Password</h1>
            </center><br>
            <center>
                <div id="message1"></div>
                <input type="email" id="email" name="email" class="text" placeholder="Enter Email Id" autocomplete="off" onkeyup="return validate();"><br>
                <span id="urn" style="color:white"></span>
                <center><input type="submit" name="send_otp" value="Send" class="button"></center><br>
            </center>
        </form>
    </fieldset>
</body>
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->