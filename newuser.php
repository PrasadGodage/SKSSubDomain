<?php
include 'DB_config.php';
mysqli_select_db($con, 'soulsoftin_Web_SksCustomer');

if(isset($_GET['Uname']) && isset($_GET['pwd']) && isset($_GET['Shopname']) && isset($_GET['Contact']) && isset($_GET['Address']) && isset($_GET['WebDBName']) && isset($_GET['SubDomain']) && isset($_GET['Install_Date']) && isset($_GET['Install_Amt']) && isset($_GET['AMC_Date']) && isset($_GET['AMC_Amt']) && isset($_GET['ProductName']))
{
$Uname= $_GET['Uname'];
$pwd= $_GET['pwd'];
$Contact= $_GET['Contact'];
$Address= $_GET['Address'];
$Shopname= $_GET['Shopname'];

$WebDBName= $_GET['WebDBName'];
$Install_Date= $_GET['Install_Date'];
$Install_Amt= $_GET['Install_Amt'];
$AMC_Date= $_GET['AMC_Date'];
$AMC_Amt= $_GET['AMC_Amt'];
$ProductName= $_GET['ProductName'];

//$Contact_PersonName= $_GET['Contact_PersonName'];
//$Contact_PersonMobile= $_GET['Contact_PersonMobile'];
//$DBPassword= $_GET['DBPassword'];
//$SubDomain= $_GET['SubDomain'];

$sql= "SELECT * FROM user_login WHERE Uname ='$Uname'";
$result = mysqli_query($con,$sql);

  if ($result->num_rows > 0)
  {
  echo '<script>alert("User Already Exist.......!");</script>';
  }
  else
  {

    $sql = "INSERT INTO `WebCustomer`( `User_Name`, `Password`, `Shopname`, `Address`, `Mobile`, `Contact_PersonName`, `Contact_PersonMobile`, `WebDBName`, `DBPassword`, `SubDomain`, `Install_Date`, `Install_Amt`, `AMC_Date`, `AMC_Amt`, `ProductName`) 
    VALUES ('$Uname', '$pwd', '$Shopname', '$Address', '$Contact', '', '', '$WebDBName', '', '', '$Install_Date', '$Install_Amt', '$AMC_Date', '$AMC_Amt', '$ProductName')";
       
      if (mysqli_query($con, $sql)) 
      {
      //   echo "New record created successfully";
      $last_id = mysqli_insert_id($con);
      echo $last_id;
      } 
      else 
      {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
  }
}
else
{
    echo "Waiting for input";
}


?>