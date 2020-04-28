<style>
	body
	{
		background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
		background-size:cover;
		background-repeat:no-repeat;
	}
	.container
	{
		height: 50%;
		margin-top: 100px;
		width: 500px;
		background-color: rgba(0,0,0,0.5);
	}
	.btn
	{
		color:white;
	}
	.card-header
	{
		color:white;
	}
	.c
	{
		font-size:20px;
		color:#FFC312;
	}
</style>
<div class="container">
	<div class="card-header">
		<form id="form" method="post"  name="form" role="form">
		<h4>Add Subject</h4>
			<div class="form-group">
			<label  class="c">Subject Name:</label>
				<input type="text" class="form-control" id="subject" name="name" required>
			</div>
			<div class="form-group">
			<label class="c">course:</label>
				<select class="form-control" id="course" name="course">
				<?php foreach($b as $item){?>
					<option><?php echo $item->course_id;?></option>
				<?php }?>
				</select>
			</div>
			<div class="form-group">
			<label class="c">Semester:</label>
				<select class="form-control" id="semester" name="semester">
				</select>
			</div>
			<button   id="btn" type="submit" class="btn btn-primary float-right">submit</button>
			<input id="rst" type="reset" class="btn btn-primary float-left">
		</form>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#course').change(function(){
	var course = $('#course').val();
	jQuery.ajax({
				type: "POST",
				url: "<?php echo site_url('/web/subjectsem'); ?>",
				dataType: 'json',
				data: 
				{course:course
				},
				success: function(res) 
				{
					var sub = '';
				var i;
				for(i=0;i<res.length;i++)
				{
					sub+='<option value="'+res[i].semester_id+'">'+res[i].semester_id+'</option>';
				}
					$('#semester').html(sub);
			
				},
				error:function()
				{
					alert('oops something went wrong');	
				}
			});
	});
	$("#form").hide();
	$("#form").slideDown('slow');
	$('#btn').on('click',function(){
		var subject = $('#subject').val();
		var course = $('#course').val();
		var semester = $('#semester').val();
		
		if(subject != '' && semester != '' && course != '')
		{
			
			jQuery.ajax({
				type: "POST",
				url: "<?php echo site_url('/web/add_subject'); ?>",
				dataType: 'html',
				data: 
				{subject: subject, 
				semester: semester,
				course:course
				},
				success: function(res) 
				{
					if(res==1)
					{
						alert('subject added successfully');	
					}
			
				},
				error:function()
				{
					alert('oops something went wrong');	
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