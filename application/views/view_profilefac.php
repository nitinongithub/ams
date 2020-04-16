<style>
	.br
	{
		height:auto;
		background-color:white;
		margin-top:0px;
	}
	.dr
	{
		height:auto;
		background-color:#FFC312;
	}
	.img-fluid
	{
		width:10%;
		height:10%;
		margin-left:30px;
	}
	h2
	{
		color:red;
	}
</style>
<div class="container-fluid dr">
	<div class="container br">
		<div class="text-center">
			<img src="http://localhost/ams/images/amrapali1.png" class="img-fluid" alt="Responsive image">
			<div class="header">
			<h2>Amrapali Group Of Institutes</h2>
			<h4>Shiksha Nagar,Haldwani</h4><br>
			<h3>Faculty Details</h3>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-dark" >
				<tr id="shownamefac">
				</tr>
				<tr id="showconfac">
				</tr>
				<tr id="showemfac">
				</tr>
				<tr id="showdepfac">
				</tr>
				</div>
			</table>
			<div class="text-center">
				<div class="header">
				<h3 style="margin-top:130px;">Academic Teaching Details</h3>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-dark" >
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
						hey += '<th>Faculty Name</th>';
				hey += '<td>'+data[i].faculty_name+'</td>';
			}
			$('#shownamefac').html(hey);
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
						hey += '<th>Email</th>';
				hey += '<td>'+data[i].email+'</td>';
			}
			$('#showemfac').html(hey);
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
						hey += '<th>Contact</th>';
				hey += '<td>'+data[i].contact+'</td>';
			}
			$('#showconfac').html(hey);
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
						hey += '<th>Department</th>';
				hey += '<td>'+data[i].dept_name+'</td>';
			}
			$('#showdepfac').html(hey);
			},
			error:function()
			{
			alert('fail');
			}
			});
		}

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