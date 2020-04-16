<style>
	body
	{
		background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
		background-size:cover;
		background-repeat:no-repeat;
	}
	.card-header
	{
		color:white;
	}
	.input-group-prepend span
	{
		color:black;
		font-weight:bold;
		background-color:#FFC312;
	}
	.container
	{
		height: 60%;
		margin-top: 100px;
		margin-bottom: auto;
		width: 500px;
		background-color: rgba(0,0,0,0.5);
	}
	.btn
	{
		color:white;
	}
	#btn
	{
		margin-left:5px;
	}
</style>
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
				<input id="rst" type="reset" class="btn btn-primary float-left">
				<button id="btn" class="btn btn-primary float-left">submit</button>
				<button id="deletepar" class="btn btn-danger float-right">Delete Account</button>
			</div>
		</form>
		<form id="form1" method="post" name="form1" role="form">
			<h4>Delete Account</h4>
			<div class="md-form input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text " ><i class="fas fa-user"></i></span>
				</div>
				<input id="usernamepar" type="text" name="usernamepar" class="form-control" placeholder="username" >
			</div>
				<button id="delpar" class="btn btn-danger float-right">Delete</button>
		</form>
	</div>
</div>
<script>
$(document).ready(function(){
	$("#form").hide();
	$('#form1').hide();
	$("#form").slideDown('slow');
	$('#btn').on('click',function(){
		var username = $('#username').val();
		var password = $('#password').val();
		var parent = $('#parent').val();
		var fac_email = $('#fac_email').val();
		var contact = $('#contact').val();
		var relation = $('#relation').val();
		if(username != '' &&  password != '' && parent != '' && fac_email != '' && contact != '' && relation != '')
		{
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('/web/add_parent'); ?>",
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
					else
					{
						alert('error');
					}
				},
				error:function(xhr, status, error)
				{
					alert('already exist');	
				}
			});
		}
	    else
		{
			alert("pls fill all fields first");
		}
		return false; // This statement is necessary when you are using submit button
	});
	$('#deletepar').on('click',function(){
		$("#form").hide();
		$("#form1").slideDown('slow');
		return false;
	});
	$('#delpar').on('click',function(){
	var usernamepar = $('#usernamepar').val();
	if(usernamepar != '')
	{
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('/web/delete_parent'); ?>",
			data: {
				usernamepar: usernamepar
			},
			success: function(res) 
			{
				if(res == 1)
				{
					alert('user deleted successfully...');
					$("#pages").load('http://localhost/ams/index.php/web/add_par');
				}
				else
				{
					alert('user not exist');
				}
			}
		});
	}
	return false;
	});
});
</script>