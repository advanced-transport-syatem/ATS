
<?php
include "include.php";
session_start();
$del="Delete from `bus` where Bus_Id='".$_SESSION['Bus_id']."'";

mysql_query($del) or die(mysql_error());
//mysql_query($upd) or die(mysql_error());

//echo "registered succesfully";
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['del'] = 'Cancelled succesfully...';
	
	header('location: busavailable.php');

?>