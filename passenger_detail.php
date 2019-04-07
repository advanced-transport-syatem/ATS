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

            <section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<center><i><font size="35"><strong>Hello <?php echo $_SESSION['admin']?></font></i></strong></center>
						<br>
						<h3>Welcome to ATS</h3>
                </div>
			</section>
			<center>	<h2>Passenger details</h2> </center>
			
<br>

<?php
include "include.php";
    
	$query2="SELECT * FROM `passenger` where  Origin='".$_SESSION["ori"]."' and Destination='".$_SESSION["des"]."' and journeyDate='".$_SESSION["DATE1"]."' " ;

    $str= mysql_query($query2);
    $rows= mysql_num_rows($str) ;
	if($rows==0)
{
	echo '<h3 style= "text-align:center;"> <font color="red">No user booked this bus </font></h3>';
	echo "<br>";
}

else
{

	//echo '<h3 style= "text-align:center;"> <font color="red"><center>Available Buses </center></font></h3>';
echo '<table align="center" border=1 >
<tr>
<th> P_ID </th>
<th> Bus_ID</th>
<th> Fname </th>
<th> Lname </th>
<th> Date Of Birth </th>
<th> Age </th>
<th> Origin </th>
<th> Destination </th>
<th> Date of journey</th>
<th> Aadhar_no </th>
</tr>';
while($row=mysql_fetch_array($str))
{
	$Bus_id = $row['Bus_Id'];

	//echo $Bus_id;
	echo "<tr>";
    echo "<td>".$row['P_ID']."</td>";
	echo "<td>".$row['Bus_Id']."</td>";
    echo "<td>".$row['Fname']."</td>";
    echo "<td>".$row['Lname']."</td>";
    echo "<td>".$row['dob']."</td>";
    echo "<td>".$row['age']."</td>";
	echo "<td>".$row['Origin']."</td>";
    echo "<td>".$row['Destination']."</td>";
    echo "<td>".$row['JourneyDate']."</td>";
	echo "<td>".$row['Aadhar_no']."</td>";
	echo "</tr>";
}

echo "</table>";
}

?>
<div class="container">
<a href="#" class="image fit"><img src="images1/pp5.jpg" alt="" /></a>
</div>
		<!-- Footer -->
        <?php include 'footer.php';?>
	</body>
</html>