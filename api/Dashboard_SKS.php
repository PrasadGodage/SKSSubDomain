<?php 

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "DBConn.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);