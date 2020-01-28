<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'cseb';

if (mysqli_connect($hostName, $userName, $password, $databaseName))
{
    echo 'Connection Successful!!';
}
else {
    echo 'Connection Failed!!!' + mysqli_connect_error();
}
?>