<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
    if (!empty($_POST['urnm']) && !empty($_POST['pswd'])) {
        $log_username = $_POST['urnm'];
        $log_password = $_POST['pswd'];
        $log_check = "SELECT * FROM tbl_userreg WHERE Username='" . $log_username . "' AND password='" . $log_password . "'";
        $log_check_sql = mysqli_query($con, $log_check);

        if (mysqli_num_rows($log_check_sql) === 1) {
            $row = mysqli_fetch_assoc($log_check_sql);
            $_SESSION['Username'] = $row['username'];

            if ($log_username === $row["username"] && $log_password === $row["password"]) {
                if ($row["role"] == 1) {
                    $_SESSION['Username'] = $log_username;
                    header('Location:admin/index.php');
                } else {
                    header('Location:userhome.php');
                }
            }
        } else {
            $errors['A'] = "Username or password is incorrect.";
            $display['D'] = "block";
        }
    }
}
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
                <h1>Login</h1>
            </center><br>
            <center>
                <div id="message1"></div>
                <input type="text" id="nm" name="urnm" class="text" placeholder="USERNAME" autocomplete="off" onkeyup="return validate();"><br>
                <span id="urn" style="color:white"></span>
                <br>
                <div id="message2"></div>
                <input type="password" id="ps" class="text" name="pswd" placeholder="PASSWORD" autocomplete="off" onkeyup="return validatepass();"><br><br>
                <span id="ords" style="color:white"></span>
                <br>
                <center><input type="submit" name="submit" value="LOGIN" class="button"></center><br>
                <br><br>
                <p id="paragraph1" style="margin-top: -58px;">If not registered <a href="signup.php">CLICK HERE</a></p>
            </center>
        </form>
    </fieldset>
</body>
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->