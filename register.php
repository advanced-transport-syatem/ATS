<?php
include "include.php";

$pass=sha1($_POST["Password"]);
//$ins="INSERT INTO `user`(`Fname`,`Lname`,`Email`,`Username`,`Password`)VALUES('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['Email']."','".$_POST['Username']."','".$_POST['Password']."')";


$ins="INSERT INTO `user`(`Fname`,`Lname`,`Email`,`Username`,`Password`)VALUES('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['Email']."','".$_POST['Username']."','$pass')";

mysql_query($ins) or die(mysql_error());

//echo "registered succesfully";
session_start();
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['reg'] = 'Registered succesfully...Login now!!';
	header('location: index4.php');

?>