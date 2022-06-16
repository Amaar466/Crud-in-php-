<?php
error_reporting(0);
 session_start();

 $_SESSION["username"]="Amaar Ul Haq";
 $_SESSION["degree"]="Master";

 echo $_SESSION["username"]; 
 echo "<br /><br />";
 echo $_SESSION["degree"];
 
// session_unset();
// echo $_SESSION["username"];
?>