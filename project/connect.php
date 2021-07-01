<?php 


define('DB_SERVER', 'localhost:3307');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nursery');

//connecting to server

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check the connection

if($conn == true)
{
    //echo 'connected';
}
else{
    echo 'Connection Failed ' .mysqli_connect_error();
}
