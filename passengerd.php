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
	$_SESSION['Total_fare']=$_GET['Total_fare'];
	$_SESSION['Bus_id']=$_GET['Bus_id'];
	$_SESSION['Seats_no']=$_GET['Seats_no'];
	$s=$_SESSION['Seats_no'];
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

table, th, td {
  border: 1px solid blue;

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
					echo '<p class="message"> <font size="5" color="White"> <center> <i>';
					echo $_SESSION['pay'];
					echo "</i></center></font></p>";
					unset($_SESSION['pay']); 
				}
				?>
					<header class="major">
					
						<center><i><font size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
						
						<br>
						<h3>Welcome to ITS</h3>
					</header>
                </div>
			</section>
			<center>	<h2>Passenger Deatil</h2> </center>
			<form action="seat.php" method="POST">
                <table><center>
                    <tr><th>No</th>
                    <th>Fname</th>
                    <th>Lname</th>
                    <th> Date of birth</th>
                    <th>Age</th>
                    
                    <th>Aadhar numberNo</th>
                    </tr>
   <?php for($i=1;$i<=$s;$i++) 
   { ?>               
<tr><td><?php echo $i; ?> </td><td>
  <input class="form-control" placeholder="Enter your Fname" type="text" name="fname<?php echo $i; ?>" id='fname{$i}'>
            </td> 
  <td><input class="form-control" type="text" placeholder="Enter your Lname" name="lname<?php echo $i; ?>" >
            </td> <td> 
            <input  type="date" placeholder="yyyy-dd-mm" name="date2<?php echo $i; ?>" >
            </td><td>
	<input class="form-control" type="text" placeholder="Enter your age" name="age<?php echo $i; ?>" >
            </td><td>
	<!--<input class="form-control" type="radio"  name="radio" value="male""">male
    <input class="form-control" type="radio"  name="radio" value="female">female
            </td> <td>-->
    <input class="form-control" type="text" placeholder="Enter your adhar no" name="aadhar<?php echo $i; ?>" ></td></tr>
  <?php }?></table>
<!--	<br>Aadhar No
  <input class="form-control" type=text placeholder="Enter your aadhar no" name="Seats" >-->
  <br>
 <center> <input class="btn btn-primary" type="submit" name="submit" value="Submit">
  <input class="btn btn-primary" type="reset" value="Reset"></center>
            </center>
</form>
<br>
<div class="container">
<a href="#" class="image fit"><img src="images1/pp5.jpg" alt="" /></a>
</div>
		<!-- Footer -->
        <?php include 'footer.php';?>
	</body>
</html>
