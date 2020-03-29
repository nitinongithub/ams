<html>
	<head>
		<title> manage session </title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/style7.css">
		<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>
		<style>
			body{
				background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
				background-size:cover;
		background-repeat:no-repeat;
			}
			.container{
				height: 450px;
				margin-top: 150px;
				margin-bottom: auto;
				width: 500px;
				background-color: rgba(0,0,0,0.5);
				}
				.c{
				color:white;
				margin-top:10px;
				}
				.social_icon span{
				font-size: 70px;
			
				}
				.social_icon span a i{
				color:#FFC312;
				}

				.social_icon span a i:hover{
				color: blue;
				cursor: pointer;
				}
			
		</style>
	<body>
	<form  method="post" action="<?php echo site_url('web/insert_session');?>">
	<div class="container" >
				<div class="d-flex justify-content-center social_icon">
					<span><a  href="<?php echo site_url('authenticate/login');?>"><i class="fas fa-user-plus"></i></a></span>
			</div>
  <div class="form-group">
    <label for="session_id" class="c">Session Id:</label>
    <input type="email" class="form-control" id="sess_id" name="id">
  </div>
  <div class="form-group">
    <label for="start" class="c">Start Date:</label>
    <input type="date" class="form-control" id="start" name="start">
  </div>
  <div class="form-group">
    <label for="end" class="c"> End Date</label>
	<input type="date" class="form-control" id="end" name="end">
  </div>
  <button  id="btn" type="submit" class="btn btn-primary float-right">Submit</button>
  <button id="rst" type="reset" class="btn btn-primary float-left">Reset</button>
</form>
</div>
</body>
<script>
$(document).ready(function(){
	$("#btn").click(function(){
	$("#form").submit();
	});
	});
	$(document).ready(function(){
	$("#rst").click(function(){
	$("#form").trigger('reset');
	});
	});
	
</script>
</html>