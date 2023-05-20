

<?php
include '../../DB_config.php';

$cust_name = $_POST['cus_name'];
$shop_name = $_POST['shop_name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$in_date = $_POST['in_date'];
$in_amount = $_POST['in_amount'];
$amc_date = $_POST['amc_date'];
$amc_amount = $_POST['amc_amount'];

$message= "is added";



$data = "INSERT INTO `onlyamccustomer`(`CustomerName`, `ShopName`, `Address`, `Mobile`, `Install_date`, `Install_amt`, `Amc_date`, `Amc_amt`) VALUES ('$cust_name','$shop_name','$address','$mobile','$in_date','$in_amount','$amc_date','$amc_amount')";


if (mysqli_query($con, $data)) {
	echo "<script>
    alert('Customer Register Successfully');
    window.location.href='AMC_Customer.php';
</script>";

} else {
	// alert('Error to insert');
	echo "<script>
	alert('Error to insert');
	window.location.href='AMC_Customer.php';
	</script>";
}

?>
























