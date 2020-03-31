<html>
	<head>
		<title> add parent</title>
		
			<link rel="stylesheet" href="<?php echo base_url();?>css/style7.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>
	<style>
		body{
		background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
		background-size:cover;
		background-repeat:no-repeat;
		}
		.card-header{
			color:white;
			}
			.input-group-prepend span{
			color:black;
			font-weight:bold;
			background-color:#FFC312;
			}
			.container{
				height: 60%;
				margin-top: 100px;
				margin-bottom: auto;
				width: 500px;
				background-color: rgba(0,0,0,0.5);
				}
			.btn{
		color:white;
		}
	</style>
	<body>
		<div class="container">
			<div class="card-header" id="dot">
				<form id="form" method="post" action="<?php echo site_url('web/add_parent')?>">
				<h4>Login Details</h4>
					<div class="md-form input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text " ><i class="fas fa-user"></i></span>
						</div>
							<input type="text" name="username" class="form-control" placeholder="username" required>
					</div>
					<div class="md-form input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text " ><i class="fas fa-key"></i></span>
						</div>
							<input type="text" name="password" class="form-control" placeholder="password" required>
					</div>
					<h4>Parent Details</h4>
					<div class="md-form input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text " ><i class="fas fa-user"></i></span>
						</div>
							<input type="text" name="parent" class="form-control" placeholder="Father/Mother Name" required>
					</div>
					<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-at"></i></i></span>
					</div>
					<input type="email" name="fac_email" class="form-control" placeholder="Email" required>
					</div>
					<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-address-book"></i></span>
					</div>
						<input type="number" name="contact" class="form-control"  placeholder="contact" required>
					</div>
					<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" >relation</span>
					</div>
						<select class="form-control" id="sel1" name="relation">
						<option>Other</option>
						<option>Mother</option>
						<option>Father</option>
						</select>
					</div>
					<div class="form-group">
					<input  id="btn" type="submit" class="btn btn-primary float-right">
				<input id="rst" type="reset" class="btn btn-primary float-left">
					
				</div>
				</form>
			</div>
		</div>
	</body>
	<script>
	
	$(document).ready(function(){
	$("#form").hide();
	$("#form").slideDown('slow');

	});
	</script>
</html>