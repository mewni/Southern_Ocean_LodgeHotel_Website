<?PHP

//get the checking date from the form
//get the checkout date from the form 
//get the number of adults
//get the number of children
//get the room type
//check the availability of the room -> Redirect
//if booked, mark as booked. -> Redirect
//if error, Redirect (Error Reserving your Room)

//Database
//Table Room (RoomID, NoOFBeds)
//Table Reservations(RoomID, BookedBy, CheckInDate, CheckOutDate, 

//Calculating the availability
//get the rooms available by the beds
//if the rooms available, check the reservation table
//if the checkOut date is > than the new CHeckIN date, That room is not available. 
// || if the new CheckoutDate is larger than the Previous CheckIn Date, Room is not available.
// If the room is available, Save the user Name and the Dates,
// If not, Check the next room available. 
// Continue until finds the available room or there is no rooms
// If there is no rooms, Redirect(No rooms available)
// If Reservation Successful, Redirect(Reservation Success. Your room ID is $RoomID)
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