<?php
include 'DB_config.php';

// require_once 'footer.php'

mysqli_select_db($con, 'soulsoftin_Web_SksCustomer');
if(isset($_POST['username']))
{
   // echo "Done";

$user = $_POST['username'];

$pwd = $_POST['password'];

//echo $user."--".$pwd;

$sql= "SELECT * FROM WebCustomer WHERE User_Name ='$user' AND Password ='$pwd'";
// $sql= "INSERT INTO `user_login`(`Uname`, `pwd`) VALUES ('x','x')";

 $result = mysqli_query($con,$sql);
 $rows = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) == 1) {

    $_SESSION['username'] =$user;
    $_SESSION['id'] =$rows['CUSTID'];
    $_SESSION['ShopName'] =$rows['Shopname'];
    $_SESSION['DBName'] =$rows['WebDBName'];
    $Subdomain=$rows['Subdomain'];

//echo $_SESSION['ShopName']."--".$pwd;
header('Location:Dashboard_SKS.php');
}else{

    echo '<script>alert("Please check the login details");window.location.replace("https://soulsoftinfotech.in/SKS/index.php");</script>';
    // echo '<script>window.location.replace("https://soulsoftinfotech.in/SKS/index.php")</script>';
    // header('Location:../SKS/index.php');
//echo 'failure'.mysqli_error($con);

}



}

















// require_once('db_config.php');
// //  echo "test";


// if (isset($_POST["username"])){

// $user = $_POST['username'];

// $pwd = $_POST['password'];



// echo $user;



// //DB connection File

// $sql= "SELECT * FROM user_login WHERE Uname = '$user' AND pwd = '$pwd' ";

//  echo $sql;

// $result = mysqli_query($con,$sql);

// $check = mysqli_fetch_array($result);

// if(isset($check)){

// // echo 'success';

// header('Location:dashboard.php');

// }else{

// echo 'failure';

// }

// }

?>