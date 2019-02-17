<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Admin_Login </title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <link rel="shortcut icon" href="favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="recover/css1/style.css" />
		<script src="js1/modernizr.custom.63321.js"></script>
       	<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="recover/css/skel.css" />
			<link rel="stylesheet" href="recover/css/style.css" />
			<link rel="stylesheet" href="recover/css/style-xlarge.css" />
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
    <body >
    	<header id="header">
				<h1><a href="index.php">BookMyATS</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
					<!--	<li><a href="#about">About</a></li>
					-->	<li><a href="index4.php">Users</a></li>
						<li><a href="admin1.php">Admin</a></li>

					</ul>
				</nav>
			</header>
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
				<form class="form-4" action="admin_login.php" method ="POST" >
				    <h1>Admin Login</h1>
				    <p>
				        Username
				        <input type="text" class="form-control" name="Username" placeholder="eg:Johannes" required>
				    </p>
				    <p>
				        Password
				        <input type="password" class="form-control" name='Password' placeholder="eg:Johannes123" required> 
				    </p>

				    <p>
				        <input type="submit" class="btn-btn-primary" name="submit" value="Continue">
				    </p>  
     				<p> 
				    	<a href="index4.php" > User Login<	    </p>
				</form>​

			</section>

		</div>

    </body>
</html>