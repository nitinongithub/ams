<html>
	<head>
			<title> add faculty </title>

			<link rel="stylesheet" href="<?php echo base_url();?>css/style7.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"  crossorigin="anonymous">
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
				height: 100%;
				margin-top: 100px;
				margin-bottom: auto;
				width: 500px;
				background-color: rgba(0,0,0,0.5);
				}
			#btn{
		color: white;
		width: 100px;
		font-weight:bold;
		}
		#rst{
		color: white;
		width: 100px;
		font-weight:bold;
		}
		.btn{
			color:white;
		}
		

	#btn:hover{
	color: black;
	background-color: white;
} 
	#rst:hover{
	color: black;
	background-color: white;
}
	</style>
	<body>
<div class="container">
	<div class="card-header" id="dot">
		<form id="form1" method="post" action="<?php echo site_url('web/add_faculty')?>">
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
						<input type="password" name="password" class="form-control" placeholder="password" required>
				</div>
				<h4>Personal Details</h4>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="far fa-id-badge"></i></span>
					</div>
						<input type="number" name="fac_id" class="form-control" placeholder="Id" required>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-at"></i></i></span>
					</div>
					<input type="email" name="fac_email" class="form-control" placeholder="Email" required>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-chalkboard-teacher"></i></span>
					</div>
						<input type="text" name="fac_name" class="form-control"  placeholder="Faculty Name" required>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-address-book"></i></span>
					</div>
						<input type="number" name="contact" class="form-control"  placeholder="contact" required>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-university"></i></span>
					</div>
					<select class="form-control" id="sel1" name="dept">
					<?php foreach($a as $item){?>
					<option><?php echo $item->dept_id;?></option>
					<?php }?>
				  </select>
				</div>
				<div class="form-group">
				<input  id="btn" type="submit" class="btn btn-primary float-right">
				<input id="rst" type="reset" class="btn btn-primary float-left">
				</div>
			</div>
		</form><br>
			<div class="card-header" id="dot">
				<h4>teaching details</h4>
			<form id="form2" method="post" action="<?php echo site_url('web/add_subfaculty');?>">
			<div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text " id="inputGroupMaterial-sizing-sm"><i class="far fa-id-badge"></i></span>
			  </div>
			  <input type="number" name="fac_id" class="form-control" placeholder="Id" required>
			</div>
			<div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text md-addon" ><i class="fas fa-book-reader"></i></span>
			  </div>
			  <select class="form-control" id="sel1" name="course">
			  <?php foreach($b as $item){?>
				<option><?php echo $item->course_id;?></option>
				<?php }?>
			  </select>
			  </div>
			<div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text md-addon" ><i class="fas fa-book"></i></span>
			  </div>
			  <select class="form-control" id="sel1" name="subject">
			  <?php foreach($d as $item){?>
				<option><?php echo $item->subject_code;?></option>
				<?php }?>
			  </select>
			  </div>
			  <div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text md-addon" ><i class="fas fa-building"></i></span>
			  </div>
			  <input type="text" name="class" class="form-control"placeholder="class" required>
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
	$("#form1").hide();
	$("#form1").slideDown('slow');

	});
	</script>
</html>