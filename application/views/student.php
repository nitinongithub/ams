<html>
	<head>
		<title> add student</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/style7.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
	</head>
	<style>
		body{
			background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
			background-size:cover;
			background-repeat:no-repeat;
			}
			.container{
				height: 85%;
				margin-top: 100px;
				margin-bottom: auto;
				width: 500px;
				background-color: rgba(0,0,0,0.5);
				}
			.card-header{
			color:white;
			}
			.input-group-prepend span{
			color:black;
			font-weight:bold;
			background-color:#FFC312;
			}



	</style>
	<body>
	<div class="container">
	<div class="card-header" id="dot">
		<form id="form1" method="post" action="<?php echo site_url('web/add_student');?>">
			<h4>Login Details</h4>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " ><i class="fas fa-user"></i></span>
				</div>
					<input type="text" name="username" class="form-control" placeholder="username" required>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
						<input type="password" name="password" class="form-control" required placeholder="password">
				</div>
				<h4>Academic Details</h4>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " >Enrollment No</span>
				</div>
					<input type="text" name="enroll" class="form-control" required>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " >Student Name</span>
				</div>
					<input type="text" name="std_name" class="form-control" required>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " >Roll No</span>
				</div>
					<input type="number" name="roll_no" class="form-control" required>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " >contact</span>
				</div>
					<input type="number" name="contact" class="form-control" required>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" >Email</span>
					</div>
					<input type="email" name="std_email" class="form-control" required>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" >Department</i></span>
					</div>
					<select class="form-control" id="sel1" name="dept">
					<?php foreach($a as $item){?>
					<option><?php echo $item->dept_id;?></option>
					<?php }?>
				  </select>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text md-addon" >Course</span>
			  </div>
			  <select class="form-control" id="sel1" name="course">
			  <?php foreach($b as $item){?>
				<option><?php echo $item->course_id;?></option>
				<?php }?>
			  </select>
			  </div>
			  <div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text md-addon" >semester</span>
			  </div>
			  <select class="form-control" id="sel1" name="course">
			  <?php foreach($c as $item){?>
				<option><?php echo $item->semester_id;?></option>
				<?php }?>
			  </select>
			  </div>
			  	<input   id="btn" type="submit"  value="submit" class="btn btn-primary float-right">
				<input id="rst" type="reset" value="reset" class="btn btn-primary float-left">
			</div>
		</div>
	</body>
	<script>
	$(document).ready(function(){
	$("#form1").hide();
	$("#form1").slideDown('slow');
	});
	</script>
	
</html>