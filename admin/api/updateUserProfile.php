<?php
     include "../connection.php";
	 mysqli_set_charset($conn,'utf8');
	 $response=null;
	 $records=null;
	 extract($_POST);
	 $out=null;
	 $selectedCustomerId=null;
	  
	  if( isset($_POST['userid']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['password']) && isset($_POST['uaddress']) && isset($_POST['zipcode']) && isset($_POST['contact1']) && isset($_POST['contact2']))
		{
		  //date_default_timezone_set("Asia/Kolkata");
		  //$currentDate=date('Y-m-d H:i:s'); //Returns IST	
	     	$query = mysqli_query($conn,"UPDATE users SET firstname='$firstname',lastname='$lastname',password='$password',uaddress='$uaddress',zipcode='$zipcode',aadharid='',contact1='$contact1',contact2='$contact2' WHERE userid='$userid'");

				if($query==1)
				{
					$query = mysqli_query($conn,"select * from users where userid='$userid'");
					$affected=mysqli_num_rows($query);
				    $records;
					if($affected>0)
						{	
							while($result = mysqli_fetch_assoc($query))
							{
								$records=$result;
							}
					    		$out=array("Data" =>$records, "Responsecode"=>200,"Message"=>"User profile updated successful");
						}
						else
						{
					    		$out=array("Data" =>$records, "Responsecode"=>200,"Message"=>"No such user present!");
						}
				}
				else
				{
				 		$out=array("Data" =>$records, "Responsecode"=>200,"Message"=>"No such user present!");
				}
			
	 }
	 else
	 {
		$out=array("Message"=> "Parameter Missing!","Responsecode"=>403);
	 }

	 print json_encode($out);
?>