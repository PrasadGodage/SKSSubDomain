<?php
include '../../DB_config.php';

$newPassword = $_POST['newPassword'];
$oldPassword = $_POST['oldPassword'];

if(isset($_POST['oldPassword']) && isset($_POST['newPassword']))

{

    $insertitem="UPDATE `admindetails` SET `password` ='$newPassword' WHERE `password` = $oldPassword";
        if(mysqli_query($con,$insertitem))
        {
            echo "<script>
            alert('Password Change Successfully');
            window.location.href='logout.php';
            </script>";
        }else
        {
            echo "<script>
                alert('Error to insert');
                window.location.href='dashboard.php';
                </script>";
        }
   
}   
?>