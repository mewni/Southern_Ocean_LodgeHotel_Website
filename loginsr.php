<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "hoteldb";
$userPassword;
$userUserName;
$retrievedUserName = $_REQUEST["email"];
$retrievedPassword = $_REQUEST["psw"];

$con = new mysqli($servername, $username, $password, $dbName);

if($con->connect_error){
    die("Connection Failed: ". $con->connect_error);
}

$qry = "SELECT Email, Password FROM UserData WHERE Email='".$retrievedUserName."'";
$result = $con->query($qry);

$userUserName;
$userPassword;

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
    $userUserName = $row["Email"];  
    $userPassword = $row["Password"];
    }
}

if(md5($retrievedPassword) == $userPassword && $retrievedUserName == $userUserName){
    #Password Works
    session_start();
    $_SESSION["userName"] = $userUserName;
    header("Location:index.html");

}
else{
    #Login Unsuccessfull
    echo "Login Unsuccessfull";
    header("Location:login.php?mes=❌ Username Or Password Incorrect");

}

?>
