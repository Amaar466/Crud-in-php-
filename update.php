<?php
include("connection.php");
error_reporting(0);
$id = $_GET['sid'];
$query = "SELECT * from STUDENT where studentID='" . $id . "'";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
// echo "<pre>";
// var_dump($row);
// die();



if (isset($_GET['btn'])) {
    $id = $_GET['id'];
    $fname = $_GET['firstname'];
    $lname = $_GET['lastname'];
    $adrs = $_GET['address'];
    $cty = $_GET['city'];


    $query = "UPDATE STUDENT SET firstname='$fname',lastname=' $lname',address='$adrs',city='$cty' WHERE  studentID=".$id."";
    //  var_dump($query);
    // die();
    $data = mysqli_query($connection, $query);
     //var_dump($data);
     //die();
    if ($data) {
        echo "Record updated";
    } else {
        echo "Record not updated";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <input type="hidden" name="id" value="<?php echo $_GET['sid']; ?>" /><br /><br />
        FirstName<input type="text" name="firstname" value="<?php echo $row['firstname'];?>" /><br /><br />
        LastName<input type="text" name="lastname" value="<?php echo $row['lastName']; ?>" /><br /><br />
        Address<input type="text" name="address" value="<?php echo $row['address']; ?>" /><br /><br />
        City<input type="text" name="city" value="<?php echo $row['city']; ?>" /><br /><br />
        <input type="submit" name="btn" value="update" class="btn btn-primary">
    </form>


</body>

</html>