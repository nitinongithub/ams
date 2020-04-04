<html>
	<head>
		<title> faculty details</title>
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
				<img src="http://localhost/ams/images/amrapali1.png" class="img-fluid" alt="Responsive image">
				<div class="header">
				<h2>Amrapali Group Of Institutes</h2>
				<h4>Shiksha Nagar,Haldwani</h4><br>
				<h1>Faculty Details</h1>
				</div>
			</div>
			<table class="table table-hover" >
				<thead class="thead-dark">
					<tr class="text-center">
						<th scope="col">Faculty Name</th>
						<th scope="col">contact </th>
						<th scope="col"> Email</th>
						<th scope="col">Department Name</th>
					</tr>	
				</thead>
				<tbody class="c" id="show_fac">
				</tbody >
			</table>
			<div class="text-center">
			<div class="header">
				<h3 style="margin-top:100px;">Academic Teaching Details</h3>
				</div>
				</div>
				<table class="table table-hover" >
				<thead class="thead-dark">
					<tr class="text-center">
						<th scope="col">Subject Name</th>
						<th scope="col">Course</th>
						<th scope="col"> class</th>
					</tr>	
				</thead>
				<tbody class="c" id="show_fac1">
				</tbody >
			</table>
				
		</div>
	</div>
	</body>
	<script>
	$(function(){
		view_profilefac();
		function view_profilefac(){
		$.ajax({
			type:'ajax',
			url :"<?php echo site_url('web/view_profilefac');?>",
			async :false,
			dataType:'json',
			success : function(data){
				
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
				hey += '<tr class="table-primary text-center">'+
				'<td>'+data[i].faculty_name+'</td>'+
				'<td>'+data[i].email+'</td>'+
				'<td>'+data[i].contact+'</td>'+
				'<td>'+data[i].dept_name+'</td>'+
				'</td>'+
				'</tr>';
			}
						$('#show_fac').html(hey);
			
			},
			error:function()
			{
			alert('fail');
			}
			});
		}
	});
	$(function(){
		view_profilefac1();
		function view_profilefac1(){
		$.ajax({
			type:'ajax',
			url :"<?php echo site_url('web/view_profilefac1');?>",
			async :false,
			dataType:'json',
			success : function(data){
				
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
				hey += '<tr class="table-primary text-center">'+
				'<td>'+data[i].subject_name+'</td>'+
				'<td>'+data[i].course_name+'</td>'+
				'<td>'+data[i].class+'</td>'+
				'</td>'+
				'</tr>';
			}
				$('#show_fac1').html(hey);
			
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