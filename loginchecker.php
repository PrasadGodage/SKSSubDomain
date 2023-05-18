<?php
include 'DB_config.php';

// require_once 'footer.php'
mysqli_select_db($con, 'soulsoftin_Web_SksCustomer');

if (isset($_POST['username'])) {
    // echo "Done";

    $user = $_POST['username'];

    $pwd = $_POST['password'];

    //echo $user."--".$pwd;

    $sql = "SELECT * FROM `WebCustomer` WHERE User_Name ='$user' AND Password ='$pwd' ";
    $result = mysqli_query($con, $sql);


    $sql1 = "SELECT * FROM `adminDetails` where username ='$user' AND password ='$pwd' ";
    $result1 = mysqli_query($con, $sql1);




    if ($result == true || $result1 == true) {



        if (mysqli_num_rows($result1) > 0) {

            $rows1 = mysqli_fetch_assoc($result1);

            $_SESSION['username'] = $user;
            $_SESSION['adminName'] = $rows1['adminName'];
            header('Location:admin/header/dashboard.php');
        } else if (mysqli_num_rows($result) > 0) {

            $rows = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $user;
            $_SESSION['id'] = $rows['CUSTID'];
            $_SESSION['ShopName'] = $rows['Shopname'];
            $_SESSION['DBName'] = $rows['WebDBName'];
            $_SESSION['Address'] = $rows['Address'];
            $_SESSION['Mobile'] = $rows['Mobile'];

            // $Subdomain= $rows['Subdomain'];      

            //echo $_SESSION['ShopName']."--".$pwd;
            header('Location:Dashboard_SKS.php');
        } else {
            echo '<script>alert("Please check the login details");window.location.replace("localhost/SKS/index.php");</script>';
            // echo '<script>window.location.replace("https://soulsoftinfotech.in/SKS/index.php")</script>';
            header('Location:./index.php');

            //echo 'failure'.mysqli_error($con);

        }
    }
} else {
    echo '<script>alert("Please check the login details");window.location.replace("localhost/SKS/index.php");</script>';
    // echo '<script>window.location.replace("https://soulsoftinfotech.in/SKS/index.php")</script>';
    header('Location:./index.php');

    //echo 'failure'.mysqli_error($con);

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
