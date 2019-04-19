<!DOCTYPE html>
<?php 
//include "include.php";
  session_start(); 
  if (!isset($_SESSION['user'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['user']);
  	header("location: login.php");
	}
	for($i=1; $i<41; $i++)
{
	if(isset($_SESSION["pnr{$i}"]))
	{
		
		unset($_SESSION["pnr{$i}"]);
	}
}
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Generic</title>
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
		<link rel="stylesheet" href="css/ie/v8.css" />
		<!--<style >
		body {
				background: #7f9b4e url(images1/bus3.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
		</style>-->
		<style type="text/css">
body {
				background: #7f9b4e url(images1/Bhuj1.jpg);
				background-position: center center;
background-repeat: no-repeat;
background-attachment: fixed;
-moz-background-size: cover;
-webkit-background-size: cover;
-o-background-size: cover;
background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;

				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
			a {
    color: hotpink;
}
h1 {
    color:white;
}
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
height:500px;
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
h2
{
	color:#ADFF2F;
}
		</style>
	</head>
	<body>

		<!-- Header -->

        <?php include 'header1.php';?>
			<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<header class="major">
						<center><i><font size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
						<br>
						<h3>Welcome to ATS</h3>
						<b><h3>Search Buses</h3>
					</header>
        
			<center>	 </center>
			</div>	
			<form action="bus_details1.php" method="POST">

  From
  <input class="form-control" placeholder="Enter a city" type="text" name="Origin">
 <br> To
  <input class="form-control" type="text" placeholder="Enter a city" name="Destination" >
 <br> Date of journey
  <input class="form-control" type="date" placeholder="yyyy-dd-mm" name="Date" >
 <br> No of seats
	<input class="form-control" type="text" placeholder="Enter no of seats you want to book" name="Seats" >
<!--	<br>Aadhar No
  <input class="form-control" type=text placeholder="Enter your aadhar no" name="Seats" >-->
  <br>
  <input class="btn btn-primary" type="submit" value="Submit">
  <input class="btn btn-primary" type="reset" value="Reset">
</form></section>
<br>
</body>
		
<!-- Footer -->
        <?php include 'footer.php';?>
</html>
