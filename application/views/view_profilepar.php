<html>
	<head>
		<title> parent details</title>
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
				<h1>Parent Details</h1>
				</div>
			</div>
		<table class="table table-striped table-bordered" style="margin-top:150px;">
				<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">Parent Name</th>
					<th scope="col">email</th>
					<th scope="col">contact</th>
					<th scope="col">relation</th>
				</tr>
				</thead>
				<tbody class="c" id="show_data">
				</tbody >
				</table>
		</div>
	</div>
	</body>
	<script>
	$(function(){
		view_profilepar();
		function view_profilepar(){
			$.ajax({
			type:'ajax',
			url :"<?php echo site_url('web/view_profile');?>",
			async :false,
			dataType:'json',
			success : function(data){
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
				hey += '<tr class="table-hover text-center">'+
				'<td>'+data[i].parent_name+'</td>'+
				'<td>'+data[i].email+'</td>'+
				'<td>'+data[i].contact+'</td>'+
				'<td>'+data[i].relation+'</td>'+
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
	});
</script>
</html>