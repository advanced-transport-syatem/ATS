<?php
include "include.php";

/*if($_POST)
	echo "exists";*/
//$sel="SELECT * FROM `user` where Username='".$_POST["Username"]."' and Password='".$_POST["Password"]."'";
$sel="SELECT * FROM `user` where Username='".$_POST["Username"]."' ";

$result=mysql_query($sel) or die(mysql_error());

if(mysql_num_rows($result) == 0)
{
	session_start();
	$_SESSION['error'] = 'Username does not exist';
  	header('Location: forgetpass.php');
	//echo "<h3>Invalid username and password combination<br>Go to <a href='home.php'>homepage</a></h3>";
}
	
//else
	//echo "welcome"
else
{
	//echo "welcome";
	$security=$_POST["Security"];
	$res=mysql_fetch_array($result);
	if($res['Security']!=$security)
	{
		session_start();
	$_SESSION['error'] = 'Wrong answer <br/> to the security quesiton...';
  	header('Location: forgetpass.php');
	}
	else
	{
		$pass=sha1($_POST['New']);

	//	echo $_POST['New'];
	//	echo $pass;
		$upd= "UPDATE user SET Password='$pass' WHERE Username='".$_POST["Username"]."'";
		$result=mysql_query($upd) or die(mysql_error());
	//	echo "changed";
		session_start();
	$_SESSION['change'] = 'Password changed succesfully..';
  	header('Location:index4.php');
	}

}
	

?>