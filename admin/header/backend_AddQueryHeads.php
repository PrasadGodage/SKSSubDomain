<?php
include '../../DB_config.php';

$firstName = $_POST['head'];


$encypass = md5($password);
$data = "INSERT INTO `queryheads` (`heads`) VALUES ('$firstName')";


if (mysqli_query($con, $data)) {
	echo '<script>alert("Head is added")</script>';
    
} else {
    echo "Error to Insert";
}
























