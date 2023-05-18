<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "DB_Customer.php";

$response = null;
$records  = null;

extract($_GET);

if (isset($_GET['db_name']) && isset($_GET['date1']) && isset($_GET['date2']))



	$conn = mysqli_connect($host_name, $user_name, $password, $db_name) or die(mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');


$fromTimestamp = $_GET['date1'];
$toTimestamp = $_GET['date2'];


$sql = "SELECT `TnDate`,`totSales`,`cashSales`,`bankSales`,`creditSales`,`totPurchase`,`cashPurchase`,`bankPurchase`,`creditPurchase`,`totReceipt`,`cashReceipt`,`bankReceipt`,`totPayment`,`cashPayment`,`bankPayment` FROM `Daily_Transaction` WHERE `TnDate`>='$fromTimestamp' AND `TnDate`<='$toTimestamp'";

$loginQuery = mysqli_query($conn, $sql);

if ($loginQuery != null) {
	$loginAffected = mysqli_num_rows($loginQuery);

	if ($loginAffected > 0) {

		while (($rows = mysqli_fetch_assoc($loginQuery))) {

			$records[] = array_merge($rows);
		}

		$response = array(
			'Message' => "Daily Transaction succesfull",
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
























