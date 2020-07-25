<?php
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

$qry = "SELECT Email, Password FROM UserData";
$result = $con->query($qry);

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
    $userUserName = $row["Email"];  
    $userPassword = $row["Password"];
    }
}

if($retrievedPassword == $userPassword && $retrievedUserName == $userUserName){
    #Password Works
    session_start();
    $_SESSION["UserID"] = md5($userUserName);
    header("Location: index.html");
}
else{
    #Login Unsuccessfull

}

?>
