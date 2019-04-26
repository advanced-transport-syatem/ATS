
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
	include('db_login.php');
	
	$connection = @mysql_connect($db_host, $db_username, $db_password);
	if (!$connection)
	{
		die ("Could not connect to the database: <br />". mysql_error());
	}
	mysql_select_db('bus_booking_system');
	
?>
<style>
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
	</style>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bus_details</title>
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap1.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive1.css">
		
	</head>
	<body>
	<?php if (isset($_SESSION['Seats_no'])) {
						echo '<p class="message"> <font size="5" color="red"> <center> <i>';
						echo 'please select only ';
						echo $_SESSION['Seats_no'];
						echo ' seats';
						echo "</i></center></font></p>";
						
						}?>
		<br /><br /><br />
		<div class="container">
			<div class="row well">
				<div class="span10">
					<form action="payment1.php" name="f" method="POST" onsubmit="return validateCheckBox();">
						<ul class="thumbnails">
							<center>
						<?php
							$date = strip_tags( utf8_decode( $_SESSION['DATE'] ) );
							$query = "select * from booking where Date = '" . $date . "'";
							$result = mysql_query($query);
							$rows= mysql_num_rows($result);
							if ($rows == 0)
							{
								for($i=1; $i<21; $i++)
								{
									echo "<li class='span1'>";
										echo "<a href='#' class='thumbnail' title='Available'>";
											echo "<img src='img/available.png' alt='Available Seat'/>";
											echo "<label class='checkbox'>";
												echo "<input type='checkbox' name='ch".$i."'/>Seat".$i;
											echo "</label>";
										echo "</a>";
									echo "</li>";								
								}
								for($i=21; $i<41; $i++)
								{
									echo "<li class='span1'>";
										echo "<br>";
									echo "</li>";
								}
								for($i=21; $i<41; $i++)
								{
									echo "<li class='span1'>";
										echo "<a href='#' class='thumbnail' title='Available'>";
											echo "<img src='img/available.png' alt='Available Seat'/>";
											echo "<label class='checkbox'>";
												echo "<input type='checkbox' name='ch".$i."'/>Seat".$i;
											echo "</label>";
										echo "</a>";
									echo "</li>";								
								}
							}
							else
							{
								$seats = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
								while($row = mysql_fetch_array($result))
								{
									$pnr = explode("-", $row['PNR']);
									$pnr[3] = intval($pnr[3]) - 1;
									$seats[$pnr[3]] = 1;
								}
								for($i=1; $i<21; $i++)
								{
									$j = $i - 1;
									if($seats[$j] == 1)
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Booked'>";
												echo "<img src='img/occupied.png' alt='Booked Seat'/>";
												echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."' disabled/>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
									else
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Available'>";
												echo "<img src='img/available.png' alt='Available Seat'/>";
												echo "<label class='checkbox'>";
													echo "<input type='checkbox'  name='ch".$i."'/>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
								}	
								for($i=21; $i<41; $i++)
								{
									echo "<li class='span1'>";
										echo "<br>";
									echo "</li>";
								}
								for($i=21; $i<41; $i++)
								{
									$j = $i - 1;
									if($seats[$j] == 1)
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Booked'>";
												echo "<img src='img/occupied.png' alt='Booked Seat'/>";
												echo "<label class='checkbox'>";
													echo "<input type='checkbox' name='ch".$i."' disabled/>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
									else
									{
										echo "<li class='span1'>";
											echo "<a href='#' class='thumbnail' title='Available'>";
												echo "<img src='img/available.png' alt='Available Seat'/>";
												echo "<label class='checkbox'>";
													echo "<input type='checkbox'  name='ch".$i."'/>Seat".$i;
												echo "</label>";
											echo "</a>";
										echo "</li>";
									}
								}
								
							}
						?>
						</center>
						</ul>
						<center>
						<br><br>
							<button type="submit" class="btn btn-info">
								<i class="icon-ok icon-white"></i> book
							</button>
							<button type="reset" class="btn">
								<i class="icon-refresh icon-black"></i> Clear
							</button>
							<a href="./generic.php" class="btn btn-danger"><i class="icon-arrow-left icon-white"></i> Back </a>
							</center>
					</form>
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript">
		
			function validateCheckBox()
			{
				var c = document.getElementsByTagName('input');
				var f=0;
				var a = '<?php echo $_SESSION['Seats_no']; ?>';
				for (var i = 0; i < c.length; i++)
				{
					if (c[i].type == 'checkbox')
					{
						 if (c[i].checked)
						{
							 f=f+1;
						}
					}
				}
				if (f==a)
				{
					return true;
				}
		
				alert('Please select Your inputed total seat.');
				return false;
			}
		</script>


		<?php
		$rr=$_SESSION['Seats_no'];
		$size=sizeof($_POST);
		$number=$size/5;   //here 3 is number of column in the HTML table
		for($i=1;$i<=$rr;$i++)
		{
			$index1="fname".$i;
			$fname[$i]=$_POST[$index1];
			$index2="lname".$i;
			$lname[$i]=$_POST[$index2];
			
			$index3="age".$i;
			$age[$i]=$_POST[$index3];	
			$index3="aadhar".$i;
			$aadhar[$i]=$_POST[$index3];	
		}	
		
		for($i=1;$i<=$rr;$i++)
		{
			$query = "INSERT INTO `passenger`(`UserID`,`Bus_id`,`Fname`,`Lname`,`dob`,`age`,`Origin`,`Destination`,`JourneyDate`,`Aadhar_no`)VALUES((SELECT UserID FROM user WHERE Username LIKE '".$_SESSION['user']."'),'". $_SESSION['Bus_id'] ."','". $fname[$i] ."','". $lname[$i] ."',(SELECT dob FROM aadhar WHERE Fname LIKE '". $fname[$i] ."'),'". $age[$i] ."','". $_SESSION['ori'] ."','". $_SESSION['des'] ."','". $_SESSION['DATE'] ."',(SELECT Aadhar_no FROM aadhar WHERE Fname LIKE '".$fname[$i]."'))";
		  $number = mysql_query($query) or die(mysql_error());
		 $_SESSION["fname{$i}"] = $fname[$i];
		 $_SESSION["lname{$i}"] = $lname[$i];
		}
		
?>
	</BODY>
</HTML>