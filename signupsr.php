<?php

    session_start();

    $FirstName = $_REQUEST["firstName"];
    $LastName = $_REQUEST["lastName"];
    $Email = $_REQUEST["email"];
    $psw = $_REQUEST["psw"];    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "hoteldb";
    $retrivedEmails;
    $valid = false;

    //Connect to SQL Server
    $con = new mysqli($servername, $username, $password, $dbName);

    //connect_error - If there is an error
    if($con->connect_error){
        die("Connection Failed: ". $con->connect_error); //Show the error
    }
    
    $qry = "SELECT Email FROM UserData WHERE Email='".$Email."' ";
    $result = $con->query($qry);

    if($result->num_rows>0){
        $valid = false;
    }
    else{
        $valid = true;
    }

    if($valid)
    {
        echo "Email Ok";
        //the sql quary
        $qry2 = "INSERT INTO userData (FirstName, LastName, Email, Password) VALUES('".$FirstName ."', '".$LastName."', '".$Email."', '".$psw."')";
        $result2 = $con->query($qry2); //Execute the quary
    
       //check weather it is success
       if ($result2 === TRUE) {
           $_SESSION['userName'] = $Email;
           header("Location: login.php");// this will redirect to the login page
           //so the user can login with their added details.
       } 
       else {
           // echo "Error: " . $qry . "<br>" . $con->error; //show the error
       }   

    }
    else
    {
        header("Location: signup.php?st=erroremailexists");
    }
    
?>