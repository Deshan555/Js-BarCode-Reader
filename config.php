<?php

$user = 'root';

$password = '';

$db = 'QR_VALIDATOR';

$host = 'localhost';

$port = 3306;

$conn = mysqli_connect($host, $user, $password, $db,$port) ;

if (!$conn)
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>