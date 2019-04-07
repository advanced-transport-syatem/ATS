<?php
include "include.php";
//$s=$_SESSION['user'];
session_start();
$rr=$_SESSION['Seats_no'];
$d=$_SESSION['DATE'];

if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: payment1.php'); exit;}
	
for($i=1; $i<21; $i++)
{
	
	//$chpara = "aadhar" . strval($j);
	$chparam = "ch" . strval($i);
	$calcPNR = $d . "-" . strval($i);
//echo $calcPNR;
	$d=$_SESSION['DATE'];
	if( !empty($_POST[$chparam]) )
	
	{
		for($j=1; $j<=$rr ;$j++)
		{
		$query = "INSERT INTO `booking`(`UserID`,`name`,`user`,`Date`,`PNR`,`Bus_id`,`Total_fare`,`Bank`,`Payment_method`,`Aadhar_no`)VALUES((SELECT UserID FROM user WHERE Username LIKE '".$_SESSION['user']."'),'".$_SESSION["fname_{$j}"]."','".$_SESSION['user']."','". $d ."', '". $calcPNR ."','".$_SESSION['Bus_id']."','".$_SESSION['FARE']."','".$_POST['Bank']."','".$_POST['Payment_method']."',(SELECT Aadhar_no FROM aadhar WHERE Fname LIKE '".$_SESSION["fname_{$j}"]."'))";
//		$results = mysql_real_escape_string($query);
		}
$results = mysql_query($query);
		
		if (!$results)
		{
			die ("Could not update seat: <br />". mysql_error());
		}
		//$seatNumber = $seatNumber .", ". "$i";
	}
	
}

//$ins="INSERT INTO `booking`(`user`,`Bus_id`,`Seats_no`,`Total_fare`,`Bank`,`Payment_method`)VALUES('".$_SESSION['user']."','".$_SESSION['Bus_id']."','".$_SESSION['Seats_no']."','".$_SESSION['Total_fare']."','".$_POST['Bank']."','".$_POST['Payment_method']."')";
$req=$_SESSION['Seats_no'];
$id = $_SESSION['Bus_id'];

// Heo
$upd= "UPDATE bus SET seats=(seats-$req) WHERE Bus_Id=$id";

// insert into booking
// train setas decrea

//mysql_query($query) or die(mysql_error());
mysql_query($upd) or die(mysql_error());

//$pass="INSERT INTO `passenger`(`Fname`,`Lname`,`Adhar_no`,`Booking_id`)VALUES((SELECT Fname FROM aadhar WHERE Aadhar_no LIKE '".$_SESSION['user']."'),)"

//$results = mysql_query($query) or die(mysql_error());
//echo "registered succesfully";
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['pay'] = 'Payment successful...';
	
	header('location: n.php');

//echo '<script language="javascript">document.location.href="web_home.php"</script>';
?>