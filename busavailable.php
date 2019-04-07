<!DOCTYPE html>
<?php 
//include "include.php";
  session_start(); 
  if (!isset($_SESSION['user'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: admin_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['user']);
  	header("location: admin_login.php");
	}

?>
<html lang="en">

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bus_details</title>
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
height:400px;
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

    <header id="header">
				<h1><a href="index.php">BookMyATS</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="admin_home1.php">Home</a></li>
					<!--	<li><a href="#book">Book Now</a></li>-->
						<li><a href="admin_logout.php">Logout</a></li>
						<li><a href="passenger_detail.php">passenger detail</a></li>
						<li><a href="cancel_bus.php">Logout</a></li>
					</ul>
				</nav>
			</header>
			
				<div class="container">
                <?php
			
            if(isset($_SESSION['del']))
            {
                
                echo '<p class="message"> <font size="5" color="White"> <center> <i>';
                echo $_SESSION['del'];
                echo "</i></center></font></p>";
                
                unset($_SESSION['pay']); 
            }
            ?>
					<header class="major">
						<center><i><font size="35"><strong>Hello <?php echo $_SESSION['admin']?></font></i></strong></center>
						<br>
						<h3>Welcome to ATS</h3>
                </div>
			</section>
			
			
<br>
<form action="buses.php" method="POST">

  From
  <input class="form-control" placeholder="Enter a city" type="text" name="Origin">
 <br> To
  <input class="form-control" type="text" placeholder="Enter a city" name="Destination" >
 <br> Date of journey
  <input class="form-control" type="date" placeholder="yyyy-dd-mm" name="date1" >
<!--	<br>Aadhar No
  <input class="form-control" type=text placeholder="Enter your aadhar no" name="Seats" >-->
  <br>
  <input class="btn btn-primary" type="submit" name="submit" value="Submit">
  <input class="btn btn-primary" type="reset" value="Reset">
</form>
</html>