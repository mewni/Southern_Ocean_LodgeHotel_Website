<?php

session_start();

function getifSet(&$value, $default = null)
{
    return isset($value) ? $value : $default;
}

$userName = getIfSet($_SESSION['userName']);

?>
<!doctype html>
<html lang="en">

<head>

    <title>Login to Southern Ocean Lodge</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>


    <!-- Login form creation starts-->
    <section class="container-fluid">
        <!-- row and justify-content-center class is used to place the form in center -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">

                <form class="form-container" action="loginsr.php" method="POST">
                    <div class="form-group form-outline-light">
                        <h4 class="text-center font-weight-bold" id="hotelname"> Southern Ocean Lodge </h4>
                        <h4 class="text-center font-weight-bold"> Login </h4>

                        <label for="InputEmail">Email Address</label>
                        <input oninput="emailChange();" name="email" type="email" class="form-control" id="InputEmail" aria-describeby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="txtpsw">Password</label>
                        <input name="psw" type="password" class="form-control" id="txtpsw" placeholder="Password">
                    </div>
                    <button type="submit" class=" btn btn-outline-light btn-sm">Submit</button>
                    <div class="form-footer">
                        <p> Don't have an account? <a href="#">Sign Up</a></p>
                    </div>
                </form>

            </section>
        </section>
    </section>
    <!-- Login form creation ends -->

    <script>
        var preset = "<?php echo $userName ?>";
        var txtEmail = document.getElementById("InputEmail");

        if (preset != null) {
            txtEmail.value = preset;
            txtEmail.style.backgroundColor = "#ffffcc";
            document.getElementById("txtpsw").focus();
        }

        function emailChange() {
            txtEmail.style.backgroundColor = "#ffffff";
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>