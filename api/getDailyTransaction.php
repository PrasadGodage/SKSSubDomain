<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "DB_Customer.php";

$response = null;
$records  = null;

extract($_GET);

if (isset($_GET['db_name']) && isset($_GET['date']))

	$conn = mysqli_connect($host_name, $user_name, $password, $db_name) or die(mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');

$new_date = $_GET['date'];



$sql = "SELECT sum(`totSales`)As TotSales,sum(`cashSales`)As CashSales,sum(`bankSales`)As BankSales,sum(`creditSales`)As CreditSales,sum(`totPurchase`)As TotPurchase,sum(`cashPurchase`)As CushPurchase,sum(`bankPurchase`)As BankPurchase,sum(`creditPurchase`)As CreditPurchase,
sum(`totReceipt`)As TotReceipt,sum(`cashReceipt`)As CashReceipt,sum(`bankReceipt`)AS BankReceipt,sum(`totPayment`)As TotPayment,sum(`cashPayment`)As CashPayment,sum(`bankPayment`)As BankPayment
FROM `Daily_Transaction` WHERE TnDate='$new_date'";

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
