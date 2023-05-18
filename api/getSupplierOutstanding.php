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

$check = true;

if ($check == true) {
	$sql = "SELECT * FROM `supplier`";

	$loginQuery = mysqli_query($conn, $sql);

	if ($loginQuery != null) {
		$loginAffected = mysqli_num_rows($loginQuery);

		if ($loginAffected > 0) {

			while (($rows = mysqli_fetch_assoc($loginQuery))) {

				$records[] = array_merge($rows);
			}

			$response = array(
				'Message' => "Supplier Outstanding",
				'Responsecode' => 200,
				'Data' => $records
			);
		}
	}
}



exit(json_encode($response));
