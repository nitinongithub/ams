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
				<form id="form" method="post" name="form" role="form">
				<h4>Login Details</h4>
					<div class="md-form input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text " ><i class="fas fa-user"></i></span>
						</div>
							<input id="username" type="text" name="username" class="form-control" placeholder="username" >
					</div>
					<div class="md-form input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text " ><i class="fas fa-key"></i></span>
						</div>
							<input id="password" type="text" name="password" class="form-control" placeholder="password" >
					</div>
					<h4>Parent Details</h4>
					<div class="md-form input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text " ><i class="fas fa-user"></i></span>
						</div>
							<input id="parent" type="text" name="parent" class="form-control" placeholder="Father/Mother Name" >
					</div>
					<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-at"></i></i></span>
					</div>
					<input id="fac_email" type="email" name="fac_email" class="form-control" placeholder="Email" >
					</div>
					<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-address-book"></i></span>
					</div>
						<input id="contact" type="number" name="contact" class="form-control"  placeholder="contact" >
					</div>
					<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" >relation</span>
					</div>
						<select class="form-control" id="relation" name="relation">
						<option>Other</option>
						<option>Mother</option>
						<option>Father</option>
						</select>
					</div>
					<div class="form-group">
					<button id="btn"  class="btn btn-primary float-right">submit</button>
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
	$(document).ready(function(){
		$('#btn').on('click',function(){
			var username = $('#username').val();
			var password = $('#password').val();
			var parent = $('#parent').val();
			var fac_email = $('#fac_eamil').val();
			var contact = $('#contact').val();
			var relation = $('#relation').val();
			if(username != '' && password != '' && parent != '' && fac_email != '' && contact != '' && relation != '')
			{
			jQuery.ajax({
				type: "POST",
				url: "<?php echo base_url('/index.php/web/add_parent'); ?>",
				dataType: 'html',
				data: {
				username: username,
				password:password,
				parent:parent,
				fac_email:fac_email,
				contact:contact,
				relation:relation
				},
				success: function(res) 
				{
					if(res==1)
					{
						alert('parent added successfully');	
					}
					else{
					alert('error');
					}
				},
				error:function()
				{
					alert('error field');	
				}
				});
			}
			else
			{
				alert("pls fill all fields first");
				
			}
		});
	});
	
	
	
	
	
	
	
	</script>
</html>