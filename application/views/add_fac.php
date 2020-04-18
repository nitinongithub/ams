<style>
	body
	{
		background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
		background-size:cover;			
		background-repeat:no-repeat;
	}
	h4{
	color:white;
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
		height: 70%;
		margin-top: 100px;
		margin-bottom: auto;
		width: 500px;
		background-color: rgba(0,0,0,0.5);
	}
	#btn
	{
		color: white;
		width: 100px;
		font-weight:bold;
	}
	#rst
	{
		color: white;
		width: 100px;
		font-weight:bold;
	
	}
	.btn
	{
		color:white;
			margin-left:5px;
	}
	#btn:hover
	{
		color: black;
		background-color: white;
	} 
	#rst:hover
	{
		color: black;
		background-color: white;
	}
</style>
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
					<input id="rst" type="reset" class="btn btn-primary float-left">
					<button  id="btn"  class="btn btn-primary float-left">submit</button><br>
				</div>
				<button  id="delfac"  class="btn btn-danger float-right">Delete Account</button>
			</div>
		</form><br>
		<form id="form3" method="post" name="form3" role="form">
			<h4>Delete Account</h4>
			<div class="md-form input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text " ><i class="fas fa-user"></i></span>
				</div>
				<input type="text" name="usernamefac" class="form-control" placeholder="username" id="usernamefac">
			</div>
			<div class="md-form input-group input-group-sm mb-3">
				<div class="input-group-prepend">
						<span class="input-group-text " id="inputGroupMaterial-sizing-sm"><i class="far fa-id-badge"></i></span>
				</div>
					<input type="number" name="facid" class="form-control" placeholder="Id" id="facid">
			</div>
			<button  id="deletefac"  class="btn btn-danger float-right">Delete</button>
		</form>
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
					<?php foreach($d as $item){?>
						<option><?php echo $item->course_id;?></option>
					<?php }?>
					</select>
				</div>
				<div class="md-form input-group input-group-sm mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text md-addon" ><i class="fas fa-book"></i></span>
					</div>
					<select class="form-control" name="subjectfac" id="subjectfac">
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
<script>
$(document).ready(function(){
	$("#form2").hide();
	$('#form3').hide();
	$('#id2').on('click',function(){
		$("#form2").slideDown('slow');
		$("#form").hide();
		$("#id2").hide();
	});
	$('#course').change(function(){
		var course = $(this).val();
		$.ajax({
			url:"<?php echo site_url('/web/subjectadd');?>",
			method:"POST",
			data:{course:course},
			dataType:"json",
			success:function(res)
			{
				var sub = '';
				var i;
				for(i=0;i<res.length;i++)
				{
					sub+='<option value="'+res[i].subject_code+'">'+res[i].subject_code+'</option>';
				}
					$('#subjectfac').html(sub);
			}
		});
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
		var subjectfac = $('#subjectfac').val();
		var cls = $('#cls').val();
		if(id != '' &&  course != '' && subjectfac != '' && cls != '')
		{
	
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('/web/add_subfaculty'); ?>",
				data: {
					id: id,
					course:course,
					subjectfac:subjectfac,
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
	$('#delfac').on('click',function(){
	$('#form,#id2').hide();
	$('#form2').hide();
	$('#form3').slideDown('slow');
	return false;
	});
	$('#deletefac').on('click',function(){
	var usernamefac = $('#usernamefac').val();
	var facid = $('#facid').val();
	if(usernamefac != '' && facid != '')
	{
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('/web/delete_faculty'); ?>",
			data: {
				usernamefac: usernamefac,
				facid : facid
				
			},
			success: function(res) 
			{
				if(res == 1)
				{
					alert('user deleted successfully...');
					$("#pages").load('http://localhost/ams/index.php/web/add_fac');
				}
				else
				{
					alert('user not exist');
				}
			}
		});
	}
	else
	{
	alert('fill');
	}
	return false;
	});
});
</script>