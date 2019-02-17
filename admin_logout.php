<?php
session_start();
unset($_SESSION['admin']);
	$_SESSION['msg'] = 'Logged out succesfully';
//echo '<script language="javascript">document.location.href="home.php"</script>';
header('Location: admin1.php');
?>