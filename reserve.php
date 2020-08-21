<?PHP
    function getIfSet(&$value, $def = null)
    {
        return isset($value) ? $value : $def;
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "hoteldb";
    
    $con = new mysqli($servername, $username, $password, $dbName);

    if($con->connect_error){
        die("Connection Failed: ". $con->connect_error);
    }

    

?>