<html>
	<head>
		<title>Login</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
							<span><a href="#"><i class="fas fa-info-circle"></i></a></span>
							<span><a href="#"><i class="fab fa-facebook-square"></i></a></span>
							<span><a href="#"><i class="fab fa-google-plus-square"></i></a></span>
							<span><a href="#"><i class="fab fa-twitter-square"></i></a></span>
						</div>
					</div>
					<div class="card-body" >
						<form method="post" id="form" action="<?php echo site_url('authenticate/checklogin');?>">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
								<input type="text" class="form-control" placeholder="username" name="username">
							</div>
						</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
							<input type="password" class="form-control" placeholder="password" name="password">
							
						</div>
					</div>
					<div class="form-group">
						<button type="submit"  class="btn float-center login_btn" id="btn"><i class="fas fa-lock-open"></i></button>
						<button type="button" data-toggle="modal" data-target="#myModal"  class="btn float-right login_btn" id="btn"><i class="fas fa-key"></i></button>
					</div>
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog model-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Change Password</h4>
								</div>
							<div class="modal-body">
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
										<input type="text" class="form-control" placeholder="username"  id="user" name="user">
									</div>
								</div>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
										<input type="password" class="form-control" placeholder=" new password" id="pass" name="pass">
									</div>
								</div>
								<button class="btn float-right login_btn" id="change">change</button>
								<button type="reset" class="btn float-left login_btn">reset</button>
							</div>
							<div class="modal-footer">
								<button type="button" id="but" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
		<header><h1 id="id2" style="font-family:Segoe Script"><b><center>ATTEND TODAY, ACHIEVE TOMORROW </center></b></h1></header>
		<div class="text-center">
			<h2 style="color:white"><b>Created By</b></h2>
			<h1 id="meena" style="color:black;animation:slide-right;font-family:Comic Sans MS;font-weight:bold;">Meenakshi Tiwari</h1>
			<h1 id="bhagu" style="color:black;font-family:Comic Sans MS;font-weight:bold;">Bhagwati Bora</h1>
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
	$('#change').on('click',function(){
		var user = $('#user').val();
		var pass = $('#pass').val();
		if(user != '' && pass != '')
		{
		$.ajax({
			url:"<?php echo site_url('/web/change_password');?>",
			method:"POST",
			data:{user:user,
			pass:pass},
			success:function(res)
			{
				if(res == 1)
				{
				alert('password changed successfully');
				}
				else{
					alert('username not exist');
				}
			}
		});
		}
		else
		{
			alert('fill out the fields');
		}
			return false;
		});
	});
	
</script>