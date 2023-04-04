<?php
session_start();
include 'db.php';

$pass_value = $_SESSION['Email'];
if(isset($_POST['submit_reset'])){
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    if($pass != $cpass){
        echo '<script> alert ("Password doesnot match");</script>';
	    echo'<script>window.location.href="update_password.php";</script>';
    }
    else{
        $insert = "UPDATE `tbl_userreg` SET `password`='$cpass' WHERE `email`='$pass_value'";
        mysqli_query($con,$insert);
        echo '<script> alert ("Password updated successfully");</script>';
	    echo'<script>window.location.href="index.php";</script>';
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
        <form method="POST" name="myform" style="margin-top:10%;"><br>
            <center>
                <h1>Update Password</h1>
            </center><br>
            <center>
                <div id="message1"></div>
                <input type="password" id="pass" class="text" name="pass" placeholder="New Password" autocomplete="off" onkeyup="return validatepass();"><br><br>
                <span id="urn" style="color:white"></span>
                <br>
                <div id="message2"></div>
                <input type="password" id="cpass" class="text" name="cpass" placeholder="Confirm Password" autocomplete="off" onkeyup="return validatepass();"><br><br>
                <span id="ords" style="color:white"></span><br>
                <center><input type="submit" name="submit_reset" value="Submit" class="button"></center><br>
                <br><br>
            </center>
        </form>
    </fieldset>
</body>
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->