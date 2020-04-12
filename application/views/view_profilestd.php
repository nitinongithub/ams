		<style>
			.std1{
		height:100%;
		background-color:white;
		margin-top:0px;
		}
		.std{
		height:100%;
		background-color:#FF5733;
		}
		.img-fluid{
		width:10%;
		height:10%;
		}
		 h2{
		color:red;
		}
		</style>
	<div class="container-fluid std">
		<div class="container std1">
			<div class="text-center">
				<img src="<?php echo base_url();?>images/amrapali1.png" class="img-fluid" alt="Responsive image">
				<div class="header">
					<h2>Amrapali Group Of Institutes</h2>
					<h4>Shiksha Nagar,Haldwani</h4><br>
					<h3>Student Details</h3>
				</div>
			</div>
			<div class="table-responsive">
			<table class="table table-dark" >
				<tr id="showenroll">
				</tr>
				<tr id="showroll">
				</tr>
				<tr id="showname">
				</tr>
				<tr id="showema">
				</tr>
				<tr id="showpcon">
				</tr>
				<tr id="showdept">
				</tr>
				<tr id="showcou">
				</tr>
				<tr id="showsem">
				</tr>
			</table>
			</div>
			<div class="text-center">
				<div class="header">
					<h3>subject Details</h3>
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
						hey += '<th>Enrollment No</th>';
				hey += '<td>'+data[i].enrollment_no+'</td>';
			}
			$('#showenroll').html(hey);
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
						hey += '<th>Roll No</th>';
				hey += '<td>'+data[i].roll_no+'</td>';
			}
			$('#showroll').html(hey);
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
						hey += '<th>Student Name</th>';
				hey += '<td>'+data[i].student_name+'</td>';
			}
			$('#showname').html(hey);
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
						hey += '<th>Email</th>';
				hey += '<td>'+data[i].email+'</td>';
			}
			$('#showema').html(hey);
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
						hey += '<th>Contact</th>';
				hey += '<td>'+data[i].contact+'</td>';
			}
			$('#showcon').html(hey);
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
						hey += '<th>Department</th>';
				hey += '<td>'+data[i].dept_name+'</td>';
			}
			$('#showdept').html(hey);
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
						hey += '<th>Course</th>';
				hey += '<td>'+data[i].course_name+'</td>';
			}
			$('#showcou').html(hey);
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
				hey += '<th>Semester</th>';
				hey += '<td>'+data[i].semester_name+'</td>';
			}
			$('#showsem').html(hey);
			
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
	