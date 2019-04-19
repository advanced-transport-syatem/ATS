<!DOCTYPE html>
<?php 
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
th{
	color:#FF8C00;
}
		</style>
	</head>
	<body>

		<!-- Header -->
        <?php include 'header1.php';?>
			<div class="container">
		<!--?php
		echo '<h3 style="text-align:left;"> <font color="red"> <i> Hello ';
		echo $_SESSION['user'];
		echo "</i> </font>";
		echo '</h3>';*/
		?-->

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
	
			
					<header class="major">
						<center><i><font size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
						<br>
						<h3>Welcome to ATS</h3>
					</header>

			</section>
				</div>

<?php
include "include.php";
$req=$_POST["Seats"];
$_SESSION['rs']=$_POST["Seats"];
$_SESSION['DATE']=$_POST['Date'];
$_SESSION["Seats"]=$_POST['Seats'];
$_SESSION['des']=$_POST["Destination"];
$_SESSION['ori']=$_POST["Origin"];
$sel="SELECT * FROM `bus` where Origin='".$_POST["Origin"]."' and Destination='".$_POST["Destination"]."' and Date='".$_SESSION["DATE"]."' and Seats>= ".$_POST['Seats']."  " ;
$str= mysql_query($sel) or die(mysql_error());
$rows= mysql_num_rows($str) ;
if($rows==0)
{
	echo '<h3 style= "text-align:center;"><b> <font color="#FF8C00">No available Buses </font></h3>';
	echo "<br>";
}
else
{

	echo '<h3 style= "text-align:center;"><b> <font color="white"><center>Available Buses </center></font></h3>';
echo '<table align="center" border=1 >
<tr>
<th> Id </th>
<th> Name of the bus</th>
<th> Available seats </th>
<th> Origin </th>
<th> Destination </th>
<th> Date of journey</th>
<th> Arrival time </th>
<th> Departure time </th>
<th> Fare </th>
<th> Book </th>
</tr>';
while($row=mysql_fetch_array($str))
{
	$Bus_id = $row['Bus_Id'];
	$_SESSION['FARE']=$row['Fare'];
	$Total_fare= $row['Fare'] * $req;
	//echo $Bus_id;
	echo "<tr>";

	echo "<td>".$row['Bus_Id']."</td>";
	echo "<td>".$row['Name']."</td>";
	echo "<td>".$row['Seats']."</td>";
	echo "<td>".$row['Origin']."</td>";
	echo "<td>".$row['Destination']."</td>";
	echo "<td>".$row['Date']."</td>";
	echo "<td>".$row['Arrival_time']."</td>";
	echo "<td>".$row['Departure_time']."</td>";
	echo "<td>".$row['Fare']."</td>";
	echo "<td>";
	echo '<a href="passengerd.php?Seats_no='.$req.'& Bus_id='.$Bus_id.'& Total_fare='.$Total_fare.'">Book Now</a>';
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
}
?>
<br>

</div>
		<!-- Footer -->
        <?php include 'footer.php';?>
	</body>
</html>
