<html>
	<head>
		<title> add subject </title>
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
		.container{
				height: 50%;
				margin-top: 100px;
				width: 500px;
				background-color: rgba(0,0,0,0.5);
				}
			.btn{
		color:white;
		}
		.card-header{
			color:white;
		}
		.c{
			color:#FFC312;
		}
	</style>
	<body>
	<div class="container">
	
		<div class="card-header">
			<form id="for" method="post" action="<?php echo site_url('web/add_subject');?>">
			
				<h4>Add Subject</h4>
				<div class="form-group">
					<label  class="c">Subject Name:</label>
					<input type="text" class="form-control" id="" name="name" required>
				</div>
				<div class="form-group">
					<label class="c">Semester:</label>
					<select class="form-control" id="sel1" name="semester">
					<?php foreach($c as $item){?>
						<option><?php echo $item->semester_id;?></option>
					<?php }?>
					</select>
				</div>
					<input   id="btn" type="submit" class="btn btn-primary float-right">
					<input id="rst" type="reset" class="btn btn-primary float-left">
				</div>
				</form>
		</div>
	</body>
	<script>
	$(document).ready(function(){
	$("#for").hide();
	$("#for").slideDown('slow');
	});
	</script>
</html>