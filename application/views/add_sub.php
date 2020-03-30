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
			height:50%;
			width:500px;
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
			<form id="form1" method="post" action="<?php echo site_url('web/add_subject');?>">
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
					<button  id="btn" type="submit" class="btn btn-primary float-right">Submit</button>
					<button id="rst" type="reset" class="btn btn-primary float-left">Reset</button>
				</form>
			</div>
		</div>
	</body>
	<script>
	$(document).ready(function(){
	$("#btn").click(function(){
	$("#form1").submit();
	});
	$("#rst").click(function(){
	$("#form1").trigger('reset');
	});
	$("#form1").hide();
	$("#form1").slideDown('slow');
	});
	</script>
</html>