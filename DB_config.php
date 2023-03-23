<?php
session_start();

$servername = "localhost";


//------FOR WEB CONNECTION  ----------------
// $username = "soulsoftin_root";
// $password = "soulshiv@1987#Soul";

//------FOR LOCAL CONNECTION  ----------------
$username = "root";
$password = "";

// $dbname = "soulsoftin_Web_SksCustomer";
$dbname = "soulsoftin_SKS_Prasad";

// $con = mysqli_connect($servername, $username, $password);

$con = mysqli_connect($servername, $username, $password, $dbname);

// $con = mysqli_connect("localhost", "soulsoftin_root", "Prasad@321", "soulsoftin_SKS");

// Check connection

if ($con) {
// echo "Connected successfully";

}else{

  die("Connection failed: " . mysqli_connect_error());

}

?>