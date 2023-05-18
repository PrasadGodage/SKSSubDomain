<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include "../connection.php";
mysqli_set_charset($conn, 'utf8');
$response = null;
$records  = null;
extract($_POST);

if (isset($_POST['emailid']) && isset($_POST['password'])) {

    $gcmtoken = $_POST['gcmtoken'];

    $sql = "SELECT u.userid,u.usertype,u.firstname,u.lastname,u.emailid,u.password,u.uaddress , u.zipcode, u.aadharid,u.contact1, u.contact2, u.gcmtoken FROM users AS u WHERE emailid='$emailid' AND password='$password'";

    $jobQuery = mysqli_query($conn, $sql);

    if ($jobQuery != null) {
        $academicAffected = mysqli_num_rows($jobQuery);

        if ($academicAffected > 0) {

            $academicResults = mysqli_fetch_assoc($jobQuery);
            $records         = $academicResults;

            $userid = $academicResults['userid'];
            $sql_1 = "UPDATE users SET gcmtoken = '$gcmtoken' WHERE userid = '$userid'";
            mysqli_query($conn, $sql_1);
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
