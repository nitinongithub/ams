<html>
<head>
	<title>Login</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url();?>css/stylelogin.css">
</head>
<body>
<header><h1 id="id1" style="font-family:Segoe Script"><b>ATTENDANCE MANAGEMENT SYSTEM </b></h1></header>
<div class="container" >
	<div class="d-flex justify-content-center h-100" >
		<div class="card" >
			<div class="card-header" id="dot">
				<h3>LOGIN</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><a  href="<?php echo site_url('authenticate/login');?>"><i class="fas fa-home"></i></a></span>
					<span><a href="<?php echo site_url('web/contact');?>"><i class="far fa-address-book"></i></a></span>
					<span><a href="<?php echo site_url('web/about');?>"><i class="fas fa-info-circle"></i></a></span>
					<span><a href="<?php echo site_url('web/about');?>"><i class="fab fa-facebook-square"></i></a></span>
					<span><a href="<?php echo site_url('web/about');?>"><i class="fab fa-google-plus-square"></i></a></span>
					<span><a href="<?php echo site_url('web/about');?>"><i class="fab fa-twitter-square"></i></a></span>
				</div>
			</div>
			<div class="card-body" >
				<form method="post" id="form" action="<?php echo site_url('authenticate/checklogin');?>">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-center login_btn" id="btn">
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
<header><h1 id="id2" style="font-family:Segoe Script"><b><center>ATTEND TODAY, ACHIEVE TOMORROW </center></b></h1></header>
<div class="text-center">
<h2 style="color:white"><b>Created By</b></h2>
<h1 id="meena" style="color:black;animation:slide-right;font-family:Segoe Script;font-weight:bold;">Meenakshi Tiwari</h1>
<h1 id="bhagu" style="color:black;font-family:Segoe Script;font-weight:bold;">Bhagwati Bora</h1>
</div>
</body>
</html>
<script>
$(document).ready(function(){
	$("#btn").click(function(){
		$("#form").submit()
	});
	$("#dot").hide();
	$("#dot").slideDown('slow');
});
	
</script>
