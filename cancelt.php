<?php
include "include.php";

session_start();
$c=$_SESSION['cancelt'];
$size=sizeof($_POST);
		
for($i=1;$i=$c;$i++)
{
    //$index3="aadhar".$i;
    $chparam = "aadhar" . strval($i);
	//$aadhar[$i]=$_POST['aadhar'];	 

    //echo $aadhar[$i];
$del="Delete from `booking` where  Aadhar_no=". $chparam ."' ";
$upd= "UPDATE bus SET seats=(seats+$c) WHERE Bus_Id='".$_SESSION['Bus_Id']."' ";
}
mysql_query($del) or die(mysql_error());
mysql_query($upd) or die(mysql_error());

//echo "registered succesfully";
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['del'] = 'Cancelled succesfully...Rs.';
	//$_SESSION['refund']=$_GET['Fare'];
	//$_SESSION['mesg']=' will be refunded!!';
    header('location: history1.php');
    ?>