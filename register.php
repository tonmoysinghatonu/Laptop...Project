<html>
<head>
 <title>SLS</title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="login.css">
		<link rel="stylesheet" href="sty1.css">
	    <link rel="icon" href="img/icon.png"/>
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<meta charset='utf-8'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="script.js"></script>
		<link rel="stylesheet" href="scroll.css"/>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
</head>
	<body>
		<div id='cssmenu'>
				<ul>
					<img src="img/logo1.png" style="height: 50px; width:auto; float: right;margin-top:9px;"/>
						<li><a class="green" href="index.html">Home</a></li>
						<li><a class="green" href="about us.html">About Us</a></li>
						<li><a class="green" href="laptops.html">Laptops</a></li>
						<li><a class="green" href="others.html">Others</a></li>
						<li><a class="green" href="offers.html">Offers</a></li>
						<li><a class="red" href="register.php">Register</a></li>
						<li><a class="green" href="contact us.html">Contact Us</a></li>
				</ul>
			</div><br>
<?php include('server.php'); ?>

	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="Password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="Password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>Already a member? <a href="login.php">Sign in</a></p>
	</form>
			<div id="footer7">
				<p>copyright &amp; copy 2000-2019 All right reserved <br/>www.alpha-mobile.com
				<br/>Design & Developed by <a href="index.html" style="text-decoration: none;color: yellow;">Smart Laptop Shop</a></p>
			</div>
</body>
</html>