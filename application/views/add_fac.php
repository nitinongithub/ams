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
				height: 70%;
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
		
		<form id="form" method="post" role="form" name="form">
			<h4>Login Details</h4>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
					<span class="input-group-text " ><i class="fas fa-user"></i></span>
				</div>
					<input type="text" name="uername" class="form-control" placeholder="username" id="uername">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
						<input type="password" name="password" class="form-control" placeholder="password" id="password">
				</div>
				<h4>Personal Details</h4>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="far fa-id-badge"></i></span>
					</div>
						<input type="number" name="fac_id" class="form-control" placeholder="Id" id="fac_id">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-at"></i></i></span>
					</div>
					<input type="email" name="email" class="form-control" placeholder="Email" id="email">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-chalkboard-teacher"></i></span>
					</div>
						<input type="text" name="name" class="form-control"  placeholder="Faculty Name" id="name">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-address-book"></i></span>
					</div>
						<input type="number" name="contact" class="form-control"  placeholder="contact" id="contact">
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-university"></i></span>
					</div>
					<select class="form-control"  name="dept" id="dept">
					<?php foreach($a as $item){?>
					<option><?php echo $item->dept_id;?></option>
					<?php }?>
				  </select>
				</div>
				<div class="form-group">
				<button  id="btn"  class="btn btn-primary float-right">submit</button>
				<input id="rst" type="reset" class="btn btn-primary float-left">
				</div>
			</div>
		</form><br>
			<div class="card-header" id="dot">
				<button id="id2" class="btn btn-primary float-center">Add teaching details </button></br>
			<form id="form2" method="post" name="form2" role="form">
			<h4>teaching details</h4>
			<div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text " id="inputGroupMaterial-sizing-sm"><i class="far fa-id-badge"></i></span>
			  </div>
			  <input type="number" name="id" class="form-control" placeholder="Id" id="id">
			</div>
			<div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text md-addon" ><i class="fas fa-book-reader"></i></span>
			  </div>
			  <select class="form-control" id="course" name="course">
			  <?php foreach($b as $item){?>
				<option><?php echo $item->course_id;?></option>
				<?php }?>
			  </select>
			  </div>
			<div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text md-addon" ><i class="fas fa-book"></i></span>
			  </div>
			  <select class="form-control" name="subject" id="subject">
			  <?php foreach($d as $item){?>
				<option><?php echo $item->subject_code;?></option>
				<?php }?>
			  </select>
			  </div>
			  <div class="md-form input-group input-group-sm mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text md-addon" ><i class="fas fa-building"></i></span>
			  </div>
			  <input type="text" name="cls" class="form-control"placeholder="class" id="cls">
			</div>
			<div class="form-group">
			<button  id="btn2" class="btn btn-primary float-right">submit</button>
			<input id="rst" type="reset" class="btn btn-primary float-left">
			</div>
			</form>
			</div>
		</div>
	</body>
	<script>
	
	$(document).ready(function(){
	$("#form2").hide();
	$('#id2').on('click',function(){
	$("#form2").slideDown('slow');
	$("#form").hide();
	$("#id2").hide();
	});
	
	
	
		$('#btn').on('click',function(){
			var uername = $('#uername').val();
			var password = $('#password').val();
			var fac_id = $('#fac_id').val();
			var email = $('#email').val();
			var name = $('#name').val();
			var contact = $('#contact').val();
			var dept = $('#dept').val();
			if(uername != '' &&  password != '' && fac_id != '' && email != '' && name != '' && contact != '' && dept != '')
			{
					$.ajax({
					type: "POST",
					url: "<?php echo site_url('/web/add_faculty'); ?>",
					data: {
					uername: uername,
					password:password,
					fac_id:fac_id,
					email:email,
					name:name,
					contact:contact,
					dept:dept
					},
					success: function(res) 
					{
					if(res==1)
					{
						alert('faculty added successfully');	
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
		$('#btn2').on('click',function(){
			var id = $('#id').val();
			var course = $('#course').val();
			var subject = $('#subject').val();
			var cls = $('#cls').val();
			if(id != '' &&  course != '' && subject != '' && cls != '')
			{
					$.ajax({
					type: "POST",
					url: "<?php echo site_url('/web/add_subfaculty'); ?>",
					data: {
					id: id,
					course:course,
					subject:subject,
					cls:cls,
					},
					success: function(res) 
					{
					if(res==1)
					{
						alert('acedamic details added');	
					}
					else
					{
						alert('error');
					}
					},
					error:function(xhr, status, error)
					{
						console.log(xhr.responseText);	
					}
					});
			}
		    else
			{
				alert("pls fill all fields first");
				
			}

			return false; 
			
		});
		
	});
	
	</script>
</html>