<?php
include "include.php";

/*if($_POST)
	echo "exists";*/
	$pass=sha1($_POST["Password"]);
//$sel="SELECT * FROM `admin` where Username='".$_POST["Username"]."' and Password='".$_POST["Password"]."'";
$sel="SELECT * FROM `admin` where Username='".$_POST["Username"]."' and Password='$pass'";

$result=mysql_query($sel) or die(mysql_error());

if(mysql_num_rows($result) == 0)
{
	session_start();
	$_SESSION['error'] = 'Invalid username or password';
  	header('Location: admin1.php');
	//echo "<h3>Invalid username and password combination<br>Go to <a href='home.php'>homepage</a></h3>";
}
	
//else
	//echo "welcome"
else
{
	//echo "welcome";
	session_start();
	$_SESSION['admin']=$_POST["Username"];
echo '<script language="javascript">document.location.href="admin_home1.php"</script>';
}
	

?>




