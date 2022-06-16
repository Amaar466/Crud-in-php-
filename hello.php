<?php
include("connection.php");
$query="INSERT INTO STUDENT VALUES('2','bilal','bilal','lahore','lahore')";
$data=mysqli_query($connection,$query);

if ($data) {
    echo "Data has been Inserted";
}
?>