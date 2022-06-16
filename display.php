<style>
    td {
        padding: 10px;
    }
</style>
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
    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>
<?php

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STUDENT ";
$data = mysqli_query($connection, $query);

$total = mysqli_num_rows($data);



if ($total != 0) {


?>
    <table class="table table-striped">

    <table class="table">
  <thead>
    <tr>
            <th>studentID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Image</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>



        <!-- <tr>
            <th>studentID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Image</th>
            <th>Address</th>
            <th>City</th>
            <th colspan="2">Action</th>
        </tr> -->



        <?php



        while ($result = mysqli_fetch_assoc($data)) {
            
            ?>
            <tr>
                <td><?php echo  $result['studentID'] ?></td>
                <td><?php echo $result['firstname'] ?></td>
                <td><?php echo $result['lastName'] ?></td>
                <td><?php echo "<img  src='student/".$result['file']."' style='height:80px;width:80%;'/>"?></td>
                <td><?php echo $result['address'] ?></td>
                <td><?php echo $result['city'] ?></td>
                <td><a href='update.php?sid=<?php echo $result['studentID'] ?>' class="btn btn-success">Edit</a>
                <a href='delete.php?sid=<?php echo $result['studentID'] ?>' class="btn btn-danger">Delete</a></td>
            </tr>
    <?php   }
    } else {
        echo "no record";
    }

    ?>
    </table>