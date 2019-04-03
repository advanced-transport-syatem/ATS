<?php
include "include.php";
$pass=sha1($_POST["Password"]);
$sel="SELECT * FROM `user` where Username='".$_POST["Username"]."' and Password='$pass'";
$s1="SELECT UserID FROM `user`";
$result=mysql_query($sel) or die(mysql_error());
$r=mysql_query($s1) or die(mysql_error());
if(mysql_num_rows($result) == 0)
{
	session_start();
	$_SESSION['error'] = 'Invalid username or password';
  	header('Location: index4.php');
	//echo "<h3>Invalid username and password combination<br>Go to <a href='home.php'>homepage</a></h3>";
}
else
{
	//echo "welcome";
	session_start();
	$_SESSION['user']=$_POST["Username"];
	$_SESSION['userid']=$_GET["UserID"];
	
echo '<script language="javascript">document.location.href="generic.php"</script>';
}


?>
