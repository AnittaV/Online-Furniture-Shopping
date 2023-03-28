<script>


        function fnameValidate(){
                        var username = document.getElementById("username").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(password.match(pattern)){
                        document.getElementById("PasswordValidate").innerHTML="";
                        }
                        else if(!cpassword){
                        document.getElementById("CpasswordValidate").innerHTML="*Confirm Password Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("fnameValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }
                        function lnameValidate(){
                        var lastname = document.getElementById("lname").value;
                        var pattern =  /^[a-zA-Z]+$/;
                        isValid=true;
                        if(lastname.match(pattern)){
                        document.getElementById("lnameValidate").innerHTML="";
                        }
                        else if(!lastname){
                        document.getElementById("lnameValidate").innerHTML="*Last Name Required";
                        isValid=false;
                        }
                        else{
                        document.getElementById("lnameValidate").innerHTML="Only characters are acceptable";
                        isValid=false;
                        }
                        return isValid;
                        }

                        </script>
