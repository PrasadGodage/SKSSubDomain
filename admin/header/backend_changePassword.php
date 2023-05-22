<?php
include '../../DB_config.php';
extract($_POST);
// // Retrieve old and new passwords from POST data
// $oldPassword = $_POST['oldPassword'];
// $newPassword = $_POST['newPassword'];

// // Validate and process the password change
// // Add your validation and database update logic here

// // Example: Change the password in the database
// // Replace this with your own database update code
// function changePassword($oldPassword, $newPassword)
// {
//   // Your code to change the password in the database
// }

// // Call the changePassword function
// changePassword($oldPassword, $newPassword);

// // Return a response message
// echo "Password changed successfully.";
?>

<?php
$newPassword = $_POST['newPassword'];
$oldPassword = $_POST['oldPassword'];
if(isset($_POST['oldPassword']) && isset($_POST['newPassword']))

{

    $insertitem="UPDATE `admindetails` SET `password` ='$newPassword' WHERE `password` = $oldPassword";
        if(mysqli_query($con,$insertitem))
        {
            echo "Updated";
        }else
        {
            echo "Error to Insert";
        }


     
}
?>