<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Forget_password </title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <link rel="shortcut icon" href="favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css1/style.css" />
		<script src="js1/modernizr.custom.63321.js"></script>
       	<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images1/login.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
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
		</style>
    </head>
    <body >

		<header id="header">
				<h1><a href="index.php">BookMyTicket</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
					<!--	<li><a href="#about">About</a></li>
						--><li><a href="index4.php">Users</a></li>
						<li><a href="admin1.php">Admin</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
			</header>
        <div class="container">
		
		

	<table > 
	<!--	<tr> <td> <h3>  <I> <font color="red"> Hello <?php// echo '$_GET['User']'; ?> </font></I> </h3> </td>  </tr>
		-->
		<?php
		session_start();
		if(isset($_SESSION['error']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center><i>';
			echo $_SESSION['error'];
			echo "</i></center></font></p>";
			unset($_SESSION['error']);
		}
		?>
	</table>

			
			<section class="main">
				<form class="form-4" action="retrieve.php" method ="POST" >
				    <h1>Forgot your passowrd?</h1>
				   Username<br> 
  <input class="form-control" placeholder="eg:Johannes" type="text" name="Username" >
  <br>
What was the name of your elementary or primary school?<br>
  <input class="form-control" placeholder="Enter the answer which you have provided during registration" type="text" name="Security" >
   <br>
New password<br>
  <input class="form-control" placeholder="Enter a new password" type="password" name="New" >
 
  <input class="btn btn-primary" type="submit" value="Change">
     
				</form>​
			</section>
			
        </div>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>BoookMyTicket</h3>
							<ul class="alt">
								<li>Quick Search</li>
								<li>Online Booking</li>
								<li>Pay Online</li>
								<li>Hassle Free Bus Booking</li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Top Bus Routes</h3>
							<ul class="alt">
								<li>Hyderabad - Vijayawada</li>
								<li>Mumbai - Hyderabad</li>
								<li>Hyderabad - Bangalore</li>
								<li>Hyderabad - Mumbai</li>
							</ul>
						</section>
					<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
			<!--				<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
					-->		<ul class="tabular">
								<li>
									<h3>Address</h3>
									1234 M.G.Road<br>
									Vijayawada, AP 521126
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">bookmyticket@gmail.com</a>
								</li>
								<li>
									<h3>Phone</h3>
									(040) 122-2839
								</li>
							</ul>
						</section>
					</center>
					</div>
					<ul class="copyright">
						<li>&copy; BookMyTicket. All rights reserved.</li>
			<!--			<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
				-->	</ul>
				</div>
			</footer>
    </body>
</html>