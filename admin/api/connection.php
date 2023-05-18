<?php
//Live database credential...
$host_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "banyanbazar";

//production database credential...
 //$host_name = "localhost";
//$user_name = "root_resqdev";
//$password = "vikas3754$";
//$db_name = "root_resqdev";
$conn = mysqli_connect($host_name, $user_name, $password, $db_name) or die(mysqli_connect_error());
?>