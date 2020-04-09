<html lang="en">
	<head>
		<title>HOME</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="<?php echo base_url();?>css/stylehome.css">
		<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>
	<body>
<style>
	#x{
	margin-left:30px;
	}
	#y{
	margin-left:30px;
	}
	#tab{
	margin-top:20px;
	}
	body
	{
		background-image:url(<?php echo base_url('images/tech1.jpg');?>);		
		background-repeat:no-repeat;
			background-size:cover;
	}
	</style>
<div class="container-fluid">
		<form  class="form-inline"  id="form" method="post" name="form" role="form" action="<?php echo site_url('web/insert_data');?>">
	
			<div class="form-group">
				<label for="faculty_id">Faculty Id:</label>
				<select class="form-control" name="faculty_id" id="faculty_id">
				<?php foreach($a as $item){?>
			  <option value="<?php echo $item->faculty_id;?>"><?php echo $item->faculty_id;?></option>
				<?php }?>
			  </select>
			</div>
			<button  type="" style="margin-left:5px;" id="btn"  class="btn btn-success float-right">submit</button>
			<div class="form-group" >
				<label for="course_id" id="x">Course:</label>
			<select class="form-control" name="course" id="course">
			  </select>
			  <div class="form-group" >
				<label for="subject" id="y">Subject:</label>
			<select class="form-control" name="" id="subject">
			  </select>
			  </div>
			   <button type=""  style="margin-left:5px;" id="btn1"  class="btn btn-success float-right">submit</button>
			<label for="subject" id="y">Semester:</label>
			<select class="form-control" name="semester" id="semester">
			  </select>
			   <button  type="" style="margin-left:5px;" id="btn2"  class="btn btn-success float-right">select student</button>
			   </div>
					<label for="date"  id="y">Date:</label>
						<input type="date" class="form-control" name="date" id="date"><br><br>
			   <div class="table-responsive">
				<table class="table table-hover" id="tab" >
				<caption>List of student</caption>
				<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">Roll No</th>
					<th scope="col">Enrollment</th>
					<th scope="col">Student Name</th>
						<th scope="col">Status</th>
				</tr>
				</thead>
				<tbody class="c" id="std_show">
				</tbody >
				</table>
				<button  type="submit" style="color:white;" id="attend"  class="btn btn-success float-right">submit</button>
				
			</div>
		</form>
	<script>
	$(document).ready(function(){
	$('#btn').on('click',function(){
	var faculty_id = $('#faculty_id').val();
	if(faculty_id != '')
	{
					$.ajax({
					type: "POST",
					url: "<?php echo site_url('/web/send_id'); ?>",
					dataType:"json",
					data: {
					faculty_id: faculty_id
					},
					success: function(res)
					{
					var hey= '';
					var i;
				for(i=0;i< res.length;i++){
				hey += '<option value='+res[i].subject_code+'>'+res[i].subject_code+'</option>';
				}
				$('#subject').html(hey);
				var he= '';
					var i;
				for(i=0;i< res.length;i++){
				he += '<option value='+res[i].course_id+'>'+res[i].course_id+'</option>';
				}
				$('#course').html(he);
					}
					});
	}
	else
		{
			alert('error');
		}
	return false;
	});
	$('#btn1').on('click',function(){
		$('#btn').hide();
		var subject = $('#subject').val();
		if(subject != '')
		{
		$.ajax({
			type: "POST",
					url: "<?php echo site_url('/web/sendsub'); ?>",
					dataType:"json",
					data: {
					subject: subject
					},
					success: function(res)
					{
					var html= '';
					var i;
				for(i=0;i< res.length;i++){
				html += '<option value='+res[i].semester_id+'>'+res[i].semester_id+'</option>';
				}
				$('#semester').html(html);
					}
		
			});
		}
		return false;
	});
	$('#btn2').click(function(){
	$('#btn1').hide();
	var semester = $('#semester').val();
	var course = $('#course').val();

	$.ajax({
				type: "POST",
					url: "<?php echo site_url('/web/take_student'); ?>",
					dataType:"json",
					data: {
					semester: semester,
					course : course
					},
					success: function(res)
					{
					var std= '';

					var i;
					for(i=0;i< res.length;i++){
						std += '<tr class="table-primary text-center">'+
						'<td>'+res[i].roll_no+'</td>'+
						'<td>'+res[i].enrollment_no+'</td>'+
						'<td>'+res[i].student_name+'</td>'+
						'<td>'+'<input type="checkbox" class="form-check-input" name="student[]" value="'+res[i].enrollment_no+'"> present'+
						'</td>'+
						'</tr>';
					}
					std += '<tr class="table-primary text-center">'+
						'<td>'+2+'</td>'+
						'<td>'+2+'</td>'+
						'<td>nitin</td>'+
						'<td>'+'<input type="checkbox" class="form-check-input" name="student[]" value="10"> present'+
						'</td>'+
						'</tr>';
					std += '<tr class="table-primary text-center">'+
						'<td>'+2+'</td>'+
						'<td>'+2+'</td>'+
						'<td>mohan</td>'+
						'<td>'+'<input type="checkbox" class="form-check-input" name="student[]" value="12"> present'+
						'</td>'+
						'</tr>';
						$('#std_show').html(std);
						
					}
	
	});
	$('#btn2').hide();
	return false;
	});
	
});


</script>
</div>
</body>
</html>