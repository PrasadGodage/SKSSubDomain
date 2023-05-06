<?php 
	// Config File for Development 
	$host_name = "localhost";
	$user_name = "root";
	$password = ""; 
	$db_name = "soulsoftin_web_skscustomer";
	
	// Config File for Production 
	// $username = "soulsoftin_root";
	// $password = "soulshiv@1987#Soul";
	// $dbname = "soulsoftin_Web_SksCustomer";

	$conn = mysqli_connect($host_name, $user_name, $password, $db_name) or die(mysqli_connect_error());