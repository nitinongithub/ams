<style>
	
	#tab{
		margin-top:30px;
	}
	body
	{
		background-image:url(<?php echo base_url('images/tech.jpg');?>);		
		background-repeat:no-repeat;
		background-size:cover;
	}
	label
	{
		color:white;
	}
	#attend
	{
		margin-left:5px;
	}
	.text-center{
		margin-top:0px;
	width:400px;
	margin-left:350px;
	}
	#a{
	font-size:20px;
	}
	#x{
	font-size:20px;
	}
	#y{
	font-size:20px;
	}
	#z{
	font-size:20px;
	}
	#w{
	font-size:20px;
	}
	#ab
	{
	margin-left:10px;
	}
	.item{
	width:400px;
	height:100px;
	}
</style>
<div class="container-fluid">
	<div class="header">
	<h1 style="color:white;"><center>Amrapali Update Attendance Portal</center></h1><br><br>
</div>
<form  class="form-group"  id="format" method="post" name="format" role="form" action="<?php echo site_url('web/update_data');?>">
	<div class="container">
		<div class="container item">
			<div class="form-group">
				<label for="faculty_id" id="a">Faculty Id:</label>
				<select class="form-control" name="faculty_id" id="faculty_id">
				<?php foreach($a as $item){?>
					<option value="<?php echo $item->faculty_id;?>"><?php echo $item->faculty_id;?></option>
				<?php }?>
				</select>
				<button  type="" style="margin-left:5px;" id="btn"  class="btn btn-success float-right">submit</button><br>
			</div>
			<div class="form-group" >
				<label for="course_id" id="x">Course:</label>
				<select class="form-control" name="course" id="course">
				</select>
			</div>
			<div class="form-group" >
				<label for="subject" id="y">Subject:</label>
					<select class="form-control" name="subject" id="subject">
					</select>
					<button type=""  style="margin-left:5px;" id="btn1"  class="btn btn-success float-right">submit</button><br>
				<label for="subject" id="z">Semester:</label>
					<select class="form-control" name="semester" id="semester">
					</select>
					<button  type=""  id="btn2"  class="btn btn-success float-right">select student</button><br><br>
			
				<label for="date"  id="w">Date:</label>
					<input type="text" class="form-control" name="date" id="date"><br><br>
			</div>
		</div>
	</div></br>
   <div class="table-responsive">
		<table class="table" id="tab" >
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
			</tbody>
		</table>
		<button  type="button" style="color:white;" id="attend"  class="btn btn-success float-right">Update Attendance</button>
	</form>
</div>
		
<script>
$(document).ready(function(){
	$('#tab,#attend').hide();
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
				for(i=0;i< res.length;i++)
				{
					hey += '<option value='+res[i].subject_code+'>'+res[i].subject_code+'</option>';
				}
					$('#subject').html(hey);
				var he= '';
				var i;
				for(i=0;i< res.length;i++)
				{
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
				data:
				{
					subject: subject
				},
				success: function(res)
				{
					var html= '';
					var i;
					for(i=0;i< res.length;i++)
					{
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
					for(i=0;i< res.length;i++)
					{
						std += '<tr class="table-success text-center">'+
						'<td>'+res[i].roll_no+'</td>'+
						'<td>'+res[i].enrollment_no+'</td>'+
						'<td>'+res[i].student_name+'</td>'+
						'<td>'+'<input type="checkbox" class="form-check-input" name="students[]" value="'+res[i].enrollment_no+'" > <label>present</label></br>'+
						'<input type="checkbox"   class="form-check-input"  name="student[]" value="'+res[i].enrollment_no+'"><label> absent</label><br>'+
						'</td>'+
						'</tr>';
					}
						$('#std_show').html(std);
						$('#tab,#attend').slideDown('fast');
						$('#a,#w,#x,#y,#z').hide();
						$('#faculty_id,#course,#semester,#subject').hide();
						$("#date").datepicker({ dateFormat: 'dd-mm-yy' }).datepicker("setDate", new Date());	
				}
			});
				$('#btn2').hide();
				return false;
	});
	$('#attend').on('click',function(){
		if(confirm('do you like to submit...'))
		{
		$('#format').submit();
		}
		else
		{
			$("#pages").load('http://localhost/ams/index.php/web/update_attend');
		}
	});
	return false;
});
</script>