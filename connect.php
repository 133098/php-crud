<?php

$servername = "localhost";
$dbname = "student";
$username = "root";
$password =  "Takay1#$"."ane";


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("Not connected" . $conn->connect_error);
}

?>
