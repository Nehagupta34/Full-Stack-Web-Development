<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'cseb';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);   
if ($conn){
echo "Connected Successfully!!!";
}
else{
    echo mysqli_connect_error();
}
?>
