<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "DBConn1.php";

mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;

$check = true;
// if (isset($_SESSION['DBName'])) {
if ($check) {

$sqlC = "SELECT sum(Balance) AS CustOutStanding FROM `customer` ";

$result = mysqli_query($conn, $sqlC);

if ($result != null) {
	$rows = mysqli_fetch_assoc($result);

	if (mysqli_num_rows($result) > 0) {
		$CustOutstanding = $rows['CustOutStanding'];

		$records[] = array_merge($CustOutstanding);

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
} else {
	$response = array(
		'Message' => mysqli_error($conn),
		'Responsecode' => 300
	);
}

}
mysqli_close($conn);
exit(json_encode($response));
