<?php

    // start the user session 
    session_start();

    

    //created a function check whether there is a incoming value
    function getIfSet(&$value, $default = null)
    {
        //if there is a value return it, else return the default value.
        return isset($value) ? $value : $default;
    }
    
    //get the user name is valid
    $userName = getIfSet($_SESSION['userName']);

    //assigned to tthe variable state
    $state = getIfSet($_REQUEST['st']);

    //Show the error Message
    //I filtered out the incoming text because it may contain scripting attacks
    if($state == null)
    {

    }
    else if($state == "erroremailexists")
    {
        //If it a known error
        echo "$state";
    }
    else
    {
        //If it is not a known error
        echo "Invalid Request";
    }

?>

<!--Start of the HTMl-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signupstyle.css">

    <script src="js/signupScript.js"></script>
    <script src="js/Validate.js"></script>
    <title>SignUp</title>

    <script>
        function ValidateCpsw() {
            var check = document.signup.confirmPsw.value;
            var psw = document.signup.password.value;
            var form = document.getElementById("form");

            if (check == psw) {
                alert("Worked");
            } else {
                form.action = "#";
            }
        }
    </script>

</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Login form creation starts-->
    <section class="container-fluid">
        <!-- row and justify-content-center class is used to place the form in center -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form id="signup" class="form-container" action="signupsr.php" onsubmit="return validate();" method="POST">
                    <div class="form-group form-outline-light">
                        <h4 class="text-center font-weight-bold" id="hotelname"> Southern Ocean Lodge </h4>
                        <h4 class="text-center font-weight-bold"> Create Account </h4>

                        <label for="InputFirstName">First Name</label>
                        <input required name="firstName" type="text" class="form-control" id="InputFirstName" aria-describeby="emailHelp" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="InputLastName">Last Name</label>
                        <input required name="lastName" type="text" class="form-control" id="InputLastName" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email Address</label>
                        <input name="email" requKsired type="text" class="form-control" id="InputEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword2">Enter Password</label>
                        <input name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required name="password" type="password" class="form-control" id="InputPassword"
                            placeholder="Password">

                    </div>
                    <div class="form-group">
                        <label for="InputPassword3">Confirm Password</label>
                        <input required oninput="ValidateCpsw();" name="confirmPsw" type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm Password">
                        <p id="error-text"></p>
                    </div>

                    <button type="submit" class=" btn btn-outline-light btn-sm w-100">Sign Up</button>
                    <div class="form-footer">
                        <p>By Clicking the SignUp button, you agree to our Trems & Conditions, and Privacy Policy</p>

                    </div>
                </form>
            </section>
        </section>
    </section>
    <!-- Login form creation ends -->
    <!-- Commit -->

    <script>
        function validate(){
            var psw = document.getElementById("InputPassword");
            var conPsw = document.getElementById("ConfirmPassword");

            if(psw.value != conPsw.value){
                alert("Passwords Don't Match");
                return false;
            }
        }
    </script>
</body>

</html>