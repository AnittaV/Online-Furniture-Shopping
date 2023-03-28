<?php
require_once('./db.php')
?>

<?php
if (isset($_POST['submit'])) {
    
    $usrnm = $_POST["urnm"];
    $pssrd = $_POST["pswd"];
    $nmbr = $_POST["number"];
    $eml = $_POST["mail"];
    // $addr = $_POST["address"];
    $confirmPassword = $_POST["conpass"];


        $sqlquery = "INSERT INTO tbl_userreg VALUES (null,'$usrnm','$pssrd','$nmbr','$eml',0)";       
        if ($con->query($sqlquery) === TRUE) {
            // echo "New record created successfully";
            // header('Location: login.php');
        } else {
            echo "Error: " . $sqlquery . "<br>" . $con->error;
        }
    }


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Online Furniture Store</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="signup.js"></script>


<body style="background-image:url('./img/fur2.jpg');">


    <fieldset>
        <form method="POST" actiom="#" style="margin-top:10%;"><br>

            <center>
                <h1>REGISTER</h1>
            </center><br>
            <center>
            
            &emsp; <input type="text" class="text" id="urnm" size="60px" placeholder="USERNAME" autocomplete="off"  name="urnm" onkeyup="return Validstr1()"><br>
            <span id="msg" style="color:red;"></span>
            <div id="message6"></div>
            
            <br>
            
            &emsp; <input type="text" class="text" size="60px" placeholder="MOBILE NUMBER" maxlength="10" autocomplete="off"  name="number" id="phonenumber" onkeyup="return Validphone()"
><br>
<span id="msg2" style="color:red;"></span>
            <div id="message3"></div>
            <br>
            &emsp; <input type="text" class="text" size="60px" placeholder="MAIL ID"  autocomplete="off" name="mail" id="email" onkeyup="return Validateemail()"><br>
            <span id="email1" style="color:red;"></span>
            <div id="message4"></div>
            <br>
            &emsp; <input type="password" class="text" id="password" size="60px" placeholder="PASSWORD" autocomplete="off"  name="pswd"><br>
            <span id="pss" style="color: red;"></span>
              
              <style>
                                                 /* The message box is shown when the user clicks on the password field */
                                                    #message {
                                                    display:none;
                                                    background:#fff;
                                                    color: #000;
                                                    position: relative;
                                                    padding: 20px;
                                                    margin-top: 10px;
                                                    }
                                                                        #message p {
                                                    padding: 1px 35px;
                                                    font-size: 14px;
                                                    }
                                                    /* Add a green text color and a checkmark when the requirements are right */
                                                    .valid {
                                                    color: green;
                                                    }

                                                    .valid:before {
                                                    position: relative;
                                                    left: -25px;
                                                    content: "✔";
                                                    }

                                                    /* Add a red text color and an "x" when the requirements are wrong */
                                                    .invalid {
                                                    color: red;
                                                    }

                                                    .invalid:before {
                                                    position: relative;
                                                    left: -25px;
                                                    content: "✖";
                                                    }
                                                    </style>
                                                <div id="message">
<!--                                                    <h4 style="color:rgb(249, 164, 61) ;">Password must contain the following:</h4>-->
                                                        <p id="letter" class="invalid">A lowercase letter</p>
                                                        <p id="capital" class="invalid">A capital (uppercase) letter</p>
                                                        <p id="number" class="invalid">A number</p>
                                                        <p id="length" class="invalid">Minimum 8 characters</b></p>
                                                     </div>
                                                <script>
                                        var myInput = document.getElementById("password");
                                        var letter = document.getElementById("letter");
                                        var capital = document.getElementById("capital");
                                        var number = document.getElementById("number");
                                        var length = document.getElementById("length");
                                        myInput.onfocus = function() {
                                        document.getElementById("message").style.display = "block";
                                        }
                                        myInput.onblur = function() {
                                        document.getElementById("message").style.display = "none";
                                        }
                                        // When the user starts to type something inside the password field
                                        myInput.onkeyup = function() {
                                        // Validate lowercase letters
                                        var lowerCaseLetters = /[a-z]/g;
                                        if(myInput.value.match(lowerCaseLetters)) {
                                            letter.classList.remove("invalid");
                                            letter.classList.add("valid");
                                        } else {
                                            letter.classList.remove("valid");
                                            letter.classList.add("invalid");
                                        }

                                        // Validate capital letters
                                        var upperCaseLetters = /[A-Z]/g;
                                        if(myInput.value.match(upperCaseLetters)) {
                                            capital.classList.remove("invalid");
                                            capital.classList.add("valid");
                                        } else {
                                            capital.classList.remove("valid");
                                            capital.classList.add("invalid");
                                        }

                                        // Validate numbers
                                        var numbers = /[0-9]/g;
                                        if(myInput.value.match(numbers)) {
                                            number.classList.remove("invalid");
                                            number.classList.add("valid");
                                        } else {
                                            number.classList.remove("valid");
                                            number.classList.add("invalid");
                                        }

                                        // Validate length
                                        if(myInput.value.length >= 8) {
                                            length.classList.remove("invalid");
                                            length.classList.add("valid");
                                        } else {
                                            length.classList.remove("valid");
                                            length.classList.add("invalid");
                                        }
                                        }
                                    </script>

            <div id="message7"></div>
            <br>
            &emsp; <input type="password" class="text" id="cpassword" size="60px" placeholder="CONFIRM PASSWORD" autocomplete="off"  name="conpass" onkeyup="return Password1()"><br>
            <span id="pass2" style="color:red;"></span>
            <div id="message2"></div>
            <br>
            <!-- &emsp; <input type="text" class="text" id="fourth" size="60px" placeholder="ADDRESS"  autocomplete="off" id="address" name="address" onkeyup="return ValidateAddress()"><br>
            <div id="message8"></div><br> -->
            <input type="submit" value="REGISTER" class="button" name="submit"><br>
            <p id="paragraph1">Already have account<a href="login.php">CLICK HERE</a></p>
            </center>
        </form>
    </fieldset>

</body>

</html>


<script>
        window.onload = function () {
            document.getElementById("password").onchange = validatePassword;
            document.getElementById("cpassword").onchange = validatePassword;
        }
        function validatePassword() {
            var pass2 = document.getElementById("password").value;
            var pass1 = document.getElementById("cpassword").value;
            if (pass1 != pass2)
                document.getElementById("cpassword").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("cpassword").setCustomValidity('');
            //empty string means no validation error
        }

        function Validstr1() 
      {
        var val = document.getElementById('urnm').value;
        if (!val.match(/^[A-Za-z ]*$/))
        {
          document.getElementById('msg').innerHTML="Only alphabets are allowed";
          document.getElementById('urnm').value = val;
          document.getElementById('urnm').style.color = "red";
          return false;
          flag=1;
        }
        else
        {
          document.getElementById('msg').innerHTML=" ";
          document.getElementById('urnm').style.color = "green";
          //return true;
        }
      }
      function Validstr2() 
      {
        var val = document.getElementById('lname').value;
        if (!val.match(/^[A-Za-z]*$/))
        {
          document.getElementById('amsg').innerHTML="Only alphabets are allowed";
          document.getElementById('name').value = val;
          document.getElementById('name').style.color = "red";
          return false;
          flag=1;
        }
        else
        {
          document.getElementById('amsg').innerHTML=" ";
          document.getElementById('name').style.color = "green";
          //return true;
        }
      }
      //username                                       
      function Validstr() 
      {
        var val = document.getElementById('username').value;
        if (!val.match(/^[A-Za-z ]*$/))
        {
          document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets are allowed";
          document.getElementById('username').value = val;
          document.getElementById('username').style.color = "red";
          return false;
          flag=1;
        }
        if(val.length<4||val.length>10)
        {
          document.getElementById('msg1').innerHTML="Username between 4 to 10 characters";
          document.getElementById('username').value = val;
          document.getElementById('username').style.color = "red";
          return false;
          flag=1;
        }
        else
        {
          document.getElementById('msg1').innerHTML=" ";
          document.getElementById('username').style.color = "green";
          //return true;
        }
      }
      //email
      function Validateemail()
      {
        var email=document.getElementById('email').value;  
        var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
        if(email.length<3||email.length>40 && email!="")
        {
         document.getElementById('email1').innerHTML="Invalid Email";
         document.getElementById('email').value = email;
         document.getElementById('email').style.color = "red";
         return false;
        }
        if(!email.match(/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/))
        {  
         document.getElementById('email1').innerHTML="Please enter a valid email";  
         document.getElementById('email').value = email;
         document.getElementById('email').style.color = "red";
         return false;  
        }
        else
        {
         document.getElementById('email1').innerHTML=" ";
         document.getElementById('email').style.color = "green";
          // return true;
        }
      }
      //Username
      function Validateusername()
      {
        var email=document.getElementById('uname').value;  
        var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
        if(email.length<3||email.length>40 && email!="")
        {
         document.getElementById('email2').innerHTML="Invalid Email";
         document.getElementById('uname').value = email;
         document.getElementById('uname').style.color = "red";
         return false;
        }
        if(!email.match(/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/))
        {  
         document.getElementById('email2').innerHTML="Please enter a valid email";  
         document.getElementById('uname').value = email;
         document.getElementById('uname').style.color = "red";
         return false;  
        }
        else
        {
         document.getElementById('email2').innerHTML=" ";
         document.getElementById('uname').style.color = "green";
          // return true;
        }
      }
      //phone
     function Validphone() 
      {
        var val = document.getElementById('phonenumber').value;
        if (!val.match(/^[6789][0-9]{9}$/) && val!="")
       {
         document.getElementById('msg2').innerHTML="Only Numbers are allowed and must contain 10 number";
         document.getElementById('phonenumber').value = val;
          return false;
        }
        else
        {
         document.getElementById('msg2').innerHTML="";
          //   return true;
        }
      }
      //password
      function Password()
      {
        var pass=document.getElementById('password1').value;
        consol.log(pass);
       //var patt= /^(?=.[0-9])(?=.[!@#$%^&])[A-Za-z0-9!@#$%^&]{7,15}$/;
       //var patt = /^[a-zA-Z0-9@#$%^&]{7,15}$/;
       var patt = /^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{7,15}$/;
       if(!pass.match(patt))
       {
          console.log(pass);
          document.getElementById('pass').innerHTML="Password must be 7 to 15 character with number and special character ";  
          document.getElementById('password1').value = pass;
          document.getElementById('password1').style.color = "red";
          return false;  
        }
        else
        {
          console.log(pass, "Green");
          document.getElementById('pass').innerHTML=" ";
          document.getElementById('password1').style.color = "green";
         //return true;
        }
      }
      //confirmpassword
      function Password1()
      {
        var pass1=document.getElementById('password').value;
        var pass2=document.getElementById('cpassword').value;
       if(!pass1.match(pass2))
       {
         console.log(pass2);
         document.getElementById('pass2').innerHTML="Password must match";  
         document.getElementById('password').value = pass;
         document.getElementById('cpassword').style.color = "red";
         return false;  
       }
       else
       {
          console.log(pass1, "Green");
          document.getElementById('password').innerHTML=" ";
         document.getElementById('cpassword').style.color = "green";
         document.getElementById('pass2').innerHTML="";  
          //return true;
        }
      }
      function Val()
     {
       if(Validstr1()===false || Validstr()===false || ValidateEmail()===false || Validphone()==false || Password()===false || Password1()===false)
        {
          return false;
        }
      }
      function ValidateEmail()
                            {
                         
                              var email=document.getElementById('email').value;  
                              var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                            //var atposition=x.indexOf("@");  
                            //var dotposition=x.lastIndexOf(".");  
                           
                              if(email.length<3||email.length>30){
                                document.getElementById('el').innerHTML="Invalid Email";
                                    document.getElementById('email').value = email;
                                    document.getElementById('email').style.color = "red";
                                   // alert("err");
                                      return false;
                              }
                             if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){  
                                document.getElementById('el').innerHTML="Please enter a valid Email";  
                                document.getElementById('email').value = email;
                                    document.getElementById('email').style.color = "red";
                              return false;  
                              }
                              else{
                              document.getElementById('el').innerHTML=" ";
                              document.getElementById('email').style.color = "green";
                             return true;
    
                              
                            }
                          }
                          function ValidateAddress(){
  var address = document.getElementById('address').value;
                            if (!address.match(/^[a-zA-Z ]*$/)) 
                            {
                              document.getElementById('ad').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('address').value = address;
                                    document.getElementById('address').style.color = "red";
                                      return false;
                                     flag=1;
                            }
                            if(address.length<3||address.length>30){
                               document.getElementById('ad').innerHTML="Between 3 to 10 characters";
                                    document.getElementById('address').value = address;
    
    
                                document.getElementById('address').style.color = "red";
                                      return false;
                                      
                            }
                            else{
    
                            
                              document.getElementById('ad').innerHTML=" ";
                              document.getElementById('address').style.color = "green";
                             return true;
                            }
}

      

    </script>





