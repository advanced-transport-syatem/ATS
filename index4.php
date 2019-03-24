<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login </title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <link rel="shortcut icon" href="../favicon.ico">
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
		</noscript>

		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
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
    <body>

    <?php include 'header.php';?>
		<div class="container">


			<?php
		 session_start();
		 if(isset($_SESSION['msg']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center> <i>';
			echo $_SESSION['msg'];
			echo "</i></center></font></p>";
			unset($_SESSION['msg']);
		}
		if(isset($_SESSION['error']))
		{
			echo '<p class="error-message"> <font size="6" color="White"> <center><i>';
			echo $_SESSION['error'];
			echo "</i> </center></font></p>";
			unset($_SESSION['error']);
		}
		 if(isset($_SESSION['reg']))
		{
			echo '<p class="message"> <font size="5" color="White"><center> <i>';
			echo $_SESSION['reg'];
			echo "</i> <center></font></p>";
			unset($_SESSION['reg']);
		}
		if(isset($_SESSION['reg_error']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center><i>';
			echo $_SESSION['reg_error'];
			echo "</i> </center></font></p>";
			unset($_SESSION['reg_error']);
		}
		if(isset($_SESSION['change']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center><i>';
			echo $_SESSION['change'];
			echo "</i> </center></font></p>";
			unset($_SESSION['change']);
		}
		?>
			<section class="main">
				<form class="form-4" action="login.php" method ="POST" >
				    <h1>Login</h1>
				    <p>
				        Username
				        <input type="text" class="form-control" name="Username" placeholder="eg:Johannes" required>
				    </p>
				    <p>
				        Password
				        <input type="password" class="form-control" name='Password' placeholder="eg:Johannes123" required>
				    </p>

				    <p>
				        <input type="submit" class="btn btn-primary" name="submit" value="Continue">
				    </p>
				    <p>
			<!--	    	<a href="forgetpass.php" > Forgot password?</a> -->
				    	&nbsp;
				    	<a href="register1.php" > Register Now</a>

				    </p>

				</form>​

			</section>

		</div>
		<a name="about"></a>
		<section class="landing">
		<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h1>ATS</h1>
						<p> <b>ATS is a online bus reservation system. <br>You can now choose your bus and your seat easily <br>Try ATS experience today.</b></p>

					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-clock-o"></i>
							<p>You can book the tickets before one month<br> You can cancel the tickets one day before the journey</p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<p>You can comment/mail your queries to our contacts</p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<p>You can create your personal account and can see your booking history</p>
						</section>
					</div>
				</div>
			</section>
			</section>
                <?php include 'footer.php';?>
    </body>
</html>
