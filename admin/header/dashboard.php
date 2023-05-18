<?php
include('./header.php');

if ($_SESSION['username'] == "") {
	header("location:./../logout.php");
}

?>