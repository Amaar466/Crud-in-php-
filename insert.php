<?php
include("connection.php");
error_reporting(0);

if (isset($_POST['btn'])) {
    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $file = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["temp_name"];
    $folder = "student/" . $file;

    //  var_dump($folder);
    //  die();
    //  move_uploaded_file($tempname,$folder);
    $ImageName      = str_replace(' ', '-', strtolower($_FILES['file']['name']));
    move_uploaded_file($_FILES["file"]["tmp_name"], "student/" . $ImageName);
    $ad = $_POST['address'];
    $cit = $_POST['city'];
    if ($fn != "" && $ln != ""  && $file != "" && $ad != "" && $cit != "") {
        $query = "INSERT INTO STUDENT (firstname, lastName,file,address,city)
VALUES ('$fn', '$ln', '$ImageName'   , '$ad', '$cit')";
        $data = mysqli_query($connection, $query);
        // var_dump($data);
        // die();
        if ($data) {
            echo '<script>alert("Data has been Inserted")</script>';
        }
    } else {
        echo '<script>alert("All Field are Required")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- ID<input type="text" name="studentID" /><br /><br /> -->
        FirstName<input type="text" name="firstname" /><br /><br />
        LastName<input type="text" name="lastname" /><br /><br />
        <input type="file" name="file" /><br /><br />
        Address<input type="text" name="address" /><br /><br />
        City<input type="text" name="city" /><br /><br />
        <input type="submit" name="btn" class="btn btn-primary">
    </form>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>