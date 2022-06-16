<?php
$servername="localhost";
$username="root";
$password="";
$dbname="newphp";

$connection=mysqli_connect($servername,$username,$password,$dbname);

if ($connection) {
//   echo "Connection ok";
}
else{
    // echo "Connection Failed";
    die( "Connection Failed because" . mysqli_connect_error());
}
