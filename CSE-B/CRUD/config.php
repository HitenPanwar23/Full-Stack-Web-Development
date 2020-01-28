<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'cseb';
$conn=mysqli_connect($hostName,$userName,$password,$databaseName);

if ($conn){
    echo 'Connection Successful!!!';

}
else{
    echo "Connection Failed" + mysqli_connect_error();

}
?>