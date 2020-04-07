<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <title> Mark Attendance </title>
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
	</style>
	</head>
	<body>
	<div class="container">
		<form  class="form-inline"  id="form" method="post" name="form" role="form">
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
			   </div><br><br>
			   <div class="container-fluid ">
				<table class="table table-striped table-bordered" id="tab" >
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
		</div>
			</form>
			
		
	
	</body>
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
				'<td>'+'present'+'</td>'+
				'</tr>';
			}
				$('#std_show').html(std);
						
					}
	
	});
		return false;
	});
});

	</script>
</html>