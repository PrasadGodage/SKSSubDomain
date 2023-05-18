<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
//include "connection.php";
include "DBConn.php";

mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;

$sql = "SELECT * FROM `webcustomer`";
$jobQuery = mysqli_query($conn, $sql);
if ($jobQuery != null) {
    $academicAffected = mysqli_num_rows($jobQuery);
    if ($academicAffected > 0) {
       
        while ($academicResults = mysqli_fetch_assoc($jobQuery)) {
            //$productid = $academicResults['productid'];

           $records[]= array_merge($academicResults);

        }
        
        $response = array(
            'Message' => "All users Fetched successfully",
            "Data" => $records,
            'Responsecode' => 200
        );
    } else {
        $response = array(
            'Message' => "No data present",
            'Responsecode' => 401
        );
    }
}else{
    $response = array(
        'Message' => mysqli_error($conn),
        'Responsecode' => 300
    ); 
}
mysqli_close($conn);
exit(json_encode($response));
?>      