<?php
include "include.php";
//$s=$_SESSION['user'];
session_start();
$rr=$_SESSION['Seats_no'];
$d=$_SESSION['DATE'];

if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: payment1.php'); exit;}
	
for($i=1; $i<41; $i++)
{

	$chparam = "ch" . strval($i);
	$calcPNR = $d . "-" . strval($i);

	if( !empty($_POST[$chparam]) )
	
	{
	
	
		$query= "INSERT INTO `booking`(`UserID`,`user`,`Date`,`PNR`,`Bus_id`,`Total_fare`,`Bank`,`Payment_method`)VALUES((SELECT UserID FROM user WHERE Username LIKE '".$_SESSION['user']."'),'".$_SESSION['user']."','". $d ."', '". $calcPNR ."','".$_SESSION['Bus_id']."','".$_SESSION['FARE']."','".$_POST['Bank']."','".$_POST['Payment_method']."')";
		//$results = mysql_real_escape_string($query);
		$results = mysql_query($query);
		//$_SESSION["pnr{$i}"]=$calcPNR;
	}	
		

}
for($j=1; $j<=$rr ;$j++)
{
	
}
$req=$_SESSION['Seats_no'];
$id = $_SESSION['Bus_id'];

$upd= "UPDATE bus SET seats=(seats-$req) WHERE Bus_Id=$id";

mysql_query($upd) or die(mysql_error());
	$_SESSION['pay'] = 'Payment successful...';
	
	header('location: n.php');
?>