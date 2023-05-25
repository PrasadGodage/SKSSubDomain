<?php

header('Access-Control-Allow-Origin: *');


header('Content-Type: application/json');

include "../connection.php";

mysqli_set_charset($conn, 'utf8');

$response = null;

$records  = null;

extract($_POST);

if (isset($_POST['usertype']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['emailid']) && isset($_POST['password']) && isset($_POST['uaddress'])  && isset($_POST['zipcode'])  && isset($_POST['aadharid']) && isset($_POST['contact1']) && isset($_POST['contact2'])) {

	$qry = mysqli_query($conn, "SELECT  * from users WHERE emailid='$emailid'");

	$affected = mysqli_num_rows($qry);

	if ($affected > 0) {
		$response = array('Message' => "Email already registered.", 'Responsecode' => 500);
	} else {
		$sql = "INSERT INTO users (usertype,firstname,lastname,emailid,password,uaddress,zipcode,aadharid,contact1,contact2) VALUES('$usertype','$firstname','$lastname','$emailid','$password','$uaddress','$zipcode','$aadharid','$contact1','$contact2')";


		$jobquery  = mysqli_query($conn, $sql);

		if ($jobquery == 1) {

			$userid  = mysqli_insert_id($conn);

			$response = array(

				'Message' => "User added successfully.",

				'Data' => $userid,

				'Responsecode' => 200

			);
		} else {
			$response = array(

				'Message' => mysqli_error($conn),

				'Responsecode' => 500

			);
		}
	}
} else {
	$response = array('Message' => 'Parameter missing',   'Responsecode' => 404);
}

mysqli_close($conn);

exit(json_encode($response));
