<?php
include "include.php";
//$a=$_POST["Aadhar"];
$pass=sha1($_POST["Password"]);
$fn=$_POST['Fname'];
$ln=$_POST['Lname'];
//$ins="INSERT INTO `user`(`Fname`,`Lname`,`Email`,`Username`,`Password`)VALUES('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['Email']."','".$_POST['Username']."','".$_POST['Password']."')";
$s1="SELECT * FROM `aadhar` where Aadhar_no='".$_POST["Aadhar"]."' and Fname='$fn' and Lname='$ln'";
$result=mysql_query($s1) or die(mysql_error());
if(mysql_num_rows($result) == 0)
{
	session_start();
	$_SESSION['Aadhar'] = 'Plz Input write information';
  	header('Location: register1.php');
	//echo "<h3>Invalid username and password combination<br>Go to <a href='home.php'>homepage</a></h3>";
}
else{


$ins="INSERT INTO `user`(`Fname`,`Lname`,`Email`,`Username`,`Password`,`Aadhar_no`)VALUES('$fn','$ln','".$_POST['Email']."','".$_POST['Username']."','$pass','".$_POST["Aadhar"]."')";

mysql_query($ins) or die(mysql_error());

//echo "registered succesfully";
session_start();
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['reg'] = 'Registered succesfully...Login now!!';
	header('location: index4.php');
}

?>