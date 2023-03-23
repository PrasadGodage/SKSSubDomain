<?php
session_start();

$servername = "localhost";

$username = "soulsoftin_root";

$password = "soulshiv@1987#Soul";

$dbname = "soulsoftin_SKS_Jagdhane";
// // $dbname = "soulsoftin_shopcare";

$custcon = mysqli_connect($servername, $username, $password,$dbname);

// $con = mysqli_connect("localhost", "soulsoftin_root", "Prasad@321", "soulsoftin_SKS");

// Check connection

if ($custcon) {
 echo "Connected successfully";

}else{
  echo "Connected Fail";
  die("Connection failed: " . mysqli_connect_error());

}



?>