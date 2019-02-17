<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>update_Profile</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	
		<script src="js/jquery.min.js"></script> 
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script> 
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--<style >
		body {
				background: #7f9b4e url(images1/bus3.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
		</style>-->
		<style type="text/css">
		
input    {
width:375px;
display:block;
border: 1px solid #999;
height: 25px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input.button {
width:100px;
position:absolute;
right:20px;
bottom:20px;
background:#09C;
color:#fff;
font-family: Tahoma, Geneva, sans-serif;
height:30px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border: 1p solid #999;
}
input.button:hover {
background:#fff;
color:#09C;
}
form    {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:450px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #000000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

input::-webkit-input-placeholder {
  color: 	#f00;
}
textarea#feedback {
width:375px;
height:150px;
}
textarea.message {
display:block;
}
h2{
	color:red;
}
h4
{
	color:white;
}
td{
	color:white;
}
		</style>
	</head>
	<body style="background:-webkit-linear-gradient(left top,BurlyWood,Chocolate,Darkkhaki,BlanchedAlmond,BurlyWood); background: linear-gradient(to bottom right,BurlyWood,CadetBlue,Darkkhaki,BlanchedAlmond,BurlyWood);">

		<!-- Header -->
			<?php include 'header1.php' ?>
			<div class="container">
				<?php session_start();?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<center><i><font  size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
						<br>
						<h3>Welcome to ATS</h3>
					</header>

<center>	<h2>Update Profile</h2> </center>

<?php 
include "include.php";
//$user=$_SESSION['user'];
//$Bus_id;
$sel="SELECT * FROM `user` where Username='".$_SESSION['user']."'" ;
$str= mysql_query($sel);
$rows= mysql_num_rows($str);
if($rows==0 || $rows>1)
{
	header('Refresh:5; url=web_home.php');

	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
	echo "<br>";
	echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
}
else
{
	$row=mysql_fetch_array($str);
}	
?>
<div class="container" >
	
		<a name="register"> </a>
<form action="change.php" method ="POST" class="form-horizontal" > 
	First name
<input class="form-control" name="Fname" type="text" value="<?php echo $row['Fname'];?>">
	<br>Last name
<input class="form-control" name="Lname" value="<?php echo $row['Lname'];?>" type="text">
    <br>USer name
    <input class="form-control" name="Username" value="<?php echo $row['Username'];?>" type="text">
   <br> New Password
<input class="form-control" name="Password" placeholder="choose a new password" type ="password"> 
<br>
 <input type="submit" class="btn btn-primary" name="sub" value="Update">
 <br>
</form>
</div>
<br>
<a href="#" class="image fit"><img src="images1/pp5.jpg" alt="" /></a>
</div>
		<!-- Footer -->
        <?php include 'footer.php';?>
	</body>
</html>