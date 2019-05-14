<?php include('server.php'); 
if(empty($_SESSION['username'])){
	header('location: login.php');
}
?>
<html>
<head>
 <title>SLS</title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="login.css">
		<link rel="stylesheet" type="text/css" href="sty1.css">
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
				<script>
		        $(function () {
            $('#scrollToBottom').bind("click", function () {
                $('html, body').animate({ scrollTop: $(document).height() }, 1200);
                return false;
            });
            $('#scrollToTop').bind("click", function () {
                $('html, body').animate({ scrollTop: 0 }, 1200);
                return false;
            });
        });
		</script>
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
				<li><a class="green" href="login.php">Log In</a></li>
				<li><a class="green" href="contact us.html">Contact Us</a></li>
			</ul>
		</div>
<br>
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);  
					?>
				</h3>
			</div>
		<?php endif ?>
		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="index.php?logout='1'" style="color: red;text-decoration: none;">Log out</a></p>
		<?php endif ?>
	</div>
			<div id="footer7">
				<p>copyright &amp; copy 2000-2019 All right reserved <br/>www.alpha-mobile.com
				<br/>Design & Developed by <a href="index.html" style="text-decoration: none;color: yellow;">Smart Laptop Shop</a></p>
			</div>			
	</body>
</html>