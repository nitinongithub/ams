<html>
	<head>
		<title> attendance management system </title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/style4.css">
		<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="top">
			<ul>
				<li><a  href="<?php echo site_url('authenticate/login');?>"><i class="fas fa-home"></i>HOME</a></li>
				<li><a href="<?php echo site_url('web/contact');?>"><i class="far fa-address-book"></i>CONTACT</a></li>
				<li><a href="<?php echo site_url('web/about');?>"><i class="fas fa-info-circle"></i>ABOUT US</li>
				<li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
				<li><a  href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
				<li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
				<li><a href="#"><i class="fab fa-whatsapp"></i>whatsapp</a></li>
			</ul>
		</div>
		<div class="image">
			<header><h1><b><center>ATTENDANCE MANAGEMENT SYSTEM </center></b></h1></header>
		</div>
		<div  class="login">
			<form  method="post" action="<?php echo site_url('authenticate/checklogin');?>">
				<header> <h1> <i class="fas fa-sign-in-alt"></i> LOGIN </h1></header>
				USERNAME:<input type="text" placeholder="username" name="username" class="cl2" id="id4"/></br></br>
				PASSWORD:<input type="password" placeholder="password" name="password" class="cl3" id="id5"/></br></br>
				<input type="submit" value="LOGIN" id="btn" class="cl6" onclick="return fun1()">
			</form>
		</div>
		<div class="footer">
			<header><h1><b><center>ATTEND TODAY, ACHIEVE TOMORROW </center></b></h1></header>
		</div>
	</body>
</html>