<html>
	<head>
		<title> Student details</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/style7.css">
		<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"  crossorigin="anonymous">
		<style>
			.bdr{
		height:100%;
		background-color:white;
		margin-top:0px;
		}
		.adr{
		height:100%;
		background-color:#FFC312;
		}
		.img-fluid{
		width:10%;
		height:10%;
		}
		 h2{
		color:red;
		}
		</style>
	</head>
	<body>
	<div class="container-fluid adr">
		<div class="container bdr">
			<div class="text-center">
				<img src="<?php echo base_url();?>images/amrapali1.png" class="img-fluid" alt="Responsive image">
				<div class="header">
					<h2>Amrapali Group Of Institutes</h2>
					<h4>Shiksha Nagar,Haldwani</h4><br>
					<h1>Student Details</h1>
				</div>
			</div>
			<table class="table table-hover" >
				<thead class="thead-dark">
					<tr class="text-center">
						<th scope="col">Enrollment No</th>
						<th scope="col">Roll No</th>
						<th scope="col">Student Name</th>
						<th scope="col">E-mail</th>
						<th scope="col">contact Name</th>
						<th scope="col">Department Name</th>
						<th scope="col">Course Name</th>
						<th scope="col">Semester Name</th>
					</tr>	
				</thead>
				<tbody class="c" id="show_data">
				</tbody >
			</table>
			<div class="text-center">
				<div class="header">
					<h1>subject Details</h1>
				</div>
			</div>
			<table class="table table-hover " >
				<thead class="thead-dark">
					<tr class="text-center">
						<th scope="col">Subject</th>
					</tr>
					</thead>
					<tbody class="c" id="showdata">				
					</tbody >
			</table>
		</div>
	</div>
		
	<script>
	$(function(){
		view_profilestd();
		function view_profilestd(){
		$.ajax({
			type:'ajax',
			url :"<?php echo site_url('web/view_profiles');?>",
			async :false,
			dataType:'json',
			success : function(data){
				
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
				hey += '<tr class="table-primary text-center">'+
				'<td>'+data[i].enrollment_no+'</td>'+
				'<td>'+data[i].roll_no+'</td>'+
				'<td>'+data[i].student_name+'</td>'+
				'<td>'+data[i].email+'</td>'+
				'<td>'+data[i].contact+'</td>'+
				'<td>'+data[i].dept_name+'</td>'+
				'<td>'+data[i].course_name+'</td>'+
				'<td>'+data[i].semester_name+'</td>'+
				'</td>'+
				'</tr>';
			}
							$('#show_data').html(hey);
			
			},
			error:function()
			{
			alert('fail');
			}
			});
		}
		
		view_profilestdsub();
		function view_profilestdsub(){
		$.ajax({
			type:'ajax',
			url :"<?php echo site_url('web/view_stdsubdata');?>",
			async :false,
			dataType:'json',
			success : function(data){
				
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
				hey += '<tr  class="text-center">'+
				'<td>'+data[i].subject_name+'</td>'+
				'</td>'+
				'</tr>';
			}
							$('#showdata').html(hey);
			
			},
			error:function()
			{
			alert('fail');
			}
			});
		}
	});
	</script>
</html>