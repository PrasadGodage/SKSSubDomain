<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "DBConn.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);
// Only for Api Checking
$check = true;

if (isset($_POST['username']) && isset($_POST['password'])) {
	// if ($check) {
	$user = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM 
	webcustomer WHERE User_name = '$user' AND Password= '$password'";
	// -- webcustomer WHERE User_name = 'Sai' AND Password= 'Balaji'";

	$loginQuery = mysqli_query($conn, $sql);

	if ($loginQuery != null) {
		$loginAffected = mysqli_num_rows($loginQuery);
		
		if ($loginAffected > 0) {
			$rows = mysqli_fetch_assoc($loginQuery);
			$records = $rows;
			
			
			// $_SESSION['username'] = "Sai";
			$_SESSION['username'] =$user;
			$_SESSION['id'] = $rows['ID'];
			$_SESSION['ShopName'] = $rows['Shopname'];
			$_SESSION['DBName'] = $rows['WebDBName'];
			// $Subdomain= $rows['Subdomain'];

			$response = array(
				'Message' => "Login successfully",
				'Responsecode' => 200,
				'Data' => $records
			);
		} else {
			$response = array(
				'Message' => "Invalid user/ No user found!",
				'Responsecode' => 500
			);
		}
	} else {
		$response = array(
			'Message' => mysqli_error($conn),
			'Responsecode' => 500
		);
	}
} else {
	$response = array(
		'Message' => "Parameter Missing!",
		'Responsecode' => 402
	);
}

mysqli_close($conn);
exit(json_encode($response));
