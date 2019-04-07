
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
	color:red;
}
		</style>
	</head>
	<body style="background:-webkit-linear-gradient(left top,BurlyWood,Chocolate,Darkkhaki,BlanchedAlmond,BurlyWood); background: linear-gradient(to bottom right,BurlyWood,CadetBlue,Darkkhaki,BlanchedAlmond,BurlyWood);">

		<!-- Header -->

        <?php include 'header1.php';?>
			<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
				<?php
			
				if(isset($_SESSION['pay']))
				{
					$rr=$_SESSION['Seats_no'];
					echo '<p class="message"> <font size="5" color="White"> <center> <i>';
					echo $_SESSION['pay'];
					echo "</i></center></font></p>";
					
					unset($_SESSION['pay']); 
				}
				?>
					<header class="major">
					
						<center><i><font size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
						
						<br>
						<h3>Welcome to ATS</h3>
					</header>
                </div>
			</section>
            <center>	<h2>your ticket</h2> </center>

            <form action=" " action="POST">
            <?php
include "include.php";
//$user=$_SESSION['user'];
//$Bus_id;

	echo '<div class="container">';
	echo '<table style="width:25%" align="center">';

	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Date:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $_SESSION['DATE'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i> Name:</i></h4>';
        echo "</td>";
        
for($j=1;$j<2;$j++)
{
		echo "<td>";
		echo $_SESSION["fname_{$j}"];
		echo "</td>";}
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Total Seat bbok:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $_SESSION['Seats_no'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Total Fare:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $_SESSION['Total_fare'];
		echo "</td>";
    echo "</tr>";
  


?>
  <input class="btn btn-primary" type="submit" name="confirm" value="Submit">
<br></form>
<?php
            
$rr=$_SESSION['Seats_no'];
for($j=1; $j<=$rr ;$j++)
					{
                        
						$tic="INSERT INTO `ticket`(`P_ID`)VALUES((SELECT P_ID FROM passenger WHERE Fname LIKE '".$_SESSION["fname_{$j}"]."' LIMIT 1))";
					}
                    mysql_query($tic) or die(mysql_error()) or die(mysql_error());
	                $_SESSION['pay'] = 'Payment successful...';
    
                    header('location:generic.php');	
                    //$_SESSION['add'] = 'Logged out succesfully';
//echo '<script language="javascript">document.location.href="home.php"</script>';
                
?>
<a href="#" class="image fit"><img src="images1/pp5.jpg" alt="" /></a>
</div>
		<!-- Footer -->
        <?php include 'footer.php';?>
</body>
</html>
           