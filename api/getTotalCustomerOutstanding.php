<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "DB_Customer.php";

$response = null;
$records  = null;

extract($_GET);

if (isset($_GET['db_name']))

	$conn = mysqli_connect($host_name, $user_name, $password, $db_name) or die(mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');



$sql = "SELECT sum(Balance) AS CustOutStanding FROM `customer`";

$loginQuery = mysqli_query($conn, $sql);

if ($loginQuery != null) {
	$loginAffected = mysqli_num_rows($loginQuery);

	if ($loginAffected > 0) {
		$rows = mysqli_fetch_assoc($loginQuery);

		$records = $rows;
		// while (()) {

		// 	$records[] = array_merge($rows);


		$response = array(
			'Message' => "Total Customer Outstanding for dashboard",
			'Responsecode' => 200,
			'Data' => $records
		);
	} else {
		$response = array(
			// 'Message' => "Invalid user/ No user found!",
			'Responsecode' => 500
		);
	}
} else {
	$response = array(
		'Message' => "Parameter Missing!",
		'Responsecode' => 402
	);
}




exit(json_encode($response));
