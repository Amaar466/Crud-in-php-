<?php
include("connection.php");
error_reporting(0);
?>
<form action="" method="POST" enctype="multipart/form-data">

    UserName<input type="text" name="username" /><br /><br />
    Password<input type="text" name="password" /><br /><br />

    <input type="submit" name="btn" value="login" class="btn btn-primary">
</form>
<?php
if(isset($_POST['btn'])){
    $username = $POST['username'];
    $password = $POST['password'];
    $query= "SELECT * FROM STUDENT WHERE username='$username' && password='$password'";
   
    $data = mysqli_query($connection , $query);
    // var_dump($data);
    // die();
    $total = mysqli_num_rows($data);
    // var_dump($total);
    // die();
    echo $total;
    
}
?>