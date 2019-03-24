<?php
include "include.php";

session_start();
for($i=1; $i<21; $i++)
{
	$chparam = "ch" . strval($i);
	$calcPNR = $_SESSION['DATE'] . "-" . strval($i);
	
	
}

$ins="INSERT INTO `booking`(`user`,`Date`,`Bus_id`,`Seats_no`,`Total_fare`,`Bank`,`Payment_method`)VALUES('".$_SESSION['user']."','". $_SESSION['DATE'] ."','".$_SESSION['Bus_id']."','".$_SESSION['Seats']."','".$_SESSION['Total_fare']."','".$_POST['Bank']."','".$_POST['Payment_method']."')";
$req=$_SESSION['Seats'];
$id = $_SESSION['Bus_id'];

// Heo
$upd= "UPDATE bus SET seats=(seats-$req) WHERE Id=$id";

// insert into booking
// train setas decrea

mysql_query($ins) or die(mysql_error());
mysql_query($upd) or die(mysql_error());

//echo "registered succesfully";
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['pay'] = 'Payment successful...';
	header('location: book.php');
//echo '<script language="javascript">document.location.href="web_home.php"</script>';
?>