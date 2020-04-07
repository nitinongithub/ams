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
		<form id="form" method="post" name="form" role="form">
			<h4>Login Details</h4>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " ><i class="fas fa-user"></i></span>
				</div>
					<input type="text" name="usrname" class="form-control" placeholder="username" id="usrname">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
						<input type="password" name="password" class="form-control" id="password" placeholder="password">
				</div>
				<h4>Academic Details</h4>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " >Enrollment No</span>
				</div>
					<input type="text" name="enroll" class="form-control" id="enroll">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " >Student Name</span>
				</div>
					<input type="text" name="name" class="form-control" id="name">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " >Roll No</span>
				</div>
					<input type="number" name="rollno" class="form-control" id="rollno">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " >contact</span>
				</div>
					<input type="number" name="contact" class="form-control" id="contact">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" >Email</span>
					</div>
					<input type="email" name="email" class="form-control" id="email">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" >Department</i></span>
					</div>
					<select class="form-control"  name="department" id="department">
					<?php foreach($a as $item){?>
					<option value="<?php echo $item->dept_id;?>"><?php echo $item->dept_id;?></option>
					<?php }?>
				  </select>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text md-addon" >Course</span>
			  </div>
			  <select class="form-control"  name="course" id="course">  
			 <?php foreach($b as $item){?>
					<option value="<?php echo $item->course_id;?>"><?php echo $item->course_id;?></option>
					<?php }?>
			  </select>
			  </div>
			  <div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text md-addon" >semester</span>
			  </div>
			  <select class="form-control" name="semester" id="semester">
			  <?php foreach($c as $item){?>
				<option><?php echo $item->semester_id;?></option>
				<?php }?>
			  </select>
			  </div>
			  	<button   id="btn" class="btn btn-primary float-right">submit</button>
				<input id="rst" type="reset" value="reset" class="btn btn-primary float-left">
			</div>
		</div>
	</body>
	<script>
	$(document).ready(function(){
	$("#form").hide();
	$("#form").slideDown('slow');
	$('#btn').on('click',function(){
			var usrname = $('#usrname').val();
			var password = $('#password').val();
			var enroll = $('#enroll').val();
			var name = $('#name').val();
			var contact = $('#contact').val();
			var rollno = $('#rollno').val();
			var email = $('#email').val();
			var department = $('#department').val();
			var course = $('#course').val();
			var semester = $('#semester').val();
			if(usrname != '' &&  password != '' && enroll != '' && name != '' && contact != '' && rollno != '' && email != '' && department != '' && course !='' && semester != '')
			{
			$.ajax({
					type: "POST",
					url: "<?php echo site_url('/web/add_student'); ?>",
					data: {
					usrname: usrname,
					password:password,
					enroll:enroll,
					name:name,
					contact:contact,
					rollno:rollno,
					email:email,
					department:department,
					course:course,
					semester:semester
					},
					success: function(res) 
					{
					if(res==1)
					{
						alert('student added successfully');	
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
	
	});
	
	
	</script>
	
</html>