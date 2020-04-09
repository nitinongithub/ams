<style>
	body{
		background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
		background-size:cover;
		background-repeat:no-repeat;
		}
		.container{
				height: 50%;
				margin-top: 100px;
				width: 500px;
				background-color: rgba(0,0,0,0.5);
				}
			.btn{
		color:white;
		}
		.card-header{
			color:white;
		}
		.c{
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
					<label class="c">Semester:</label>
					<select class="form-control" id="semester" name="semester">
					<?php foreach($c as $item){?>
						<option><?php echo $item->semester_id;?></option>
					<?php }?>
					</select>
				</div>
					<button   id="btn" type="submit" class="btn btn-primary float-right">submit</button>
					<input id="rst" type="reset" class="btn btn-primary float-left">
				</div>
				</form>
		</div>
	</body>
	<script>
	$(document).ready(function(){
	$("#form").hide();
	$("#form").slideDown('slow');
	});
	$(document).ready(function(){
		$('#btn').on('click',function(){
			var subject = $('#subject').val();
			var semester = $('#semester').val();
			if(subject != '' && semester != '')
			{
				jQuery.ajax({
				type: "POST",
				url: "<?php echo site_url('/web/add_subject'); ?>",
				dataType: 'html',
				data: 
				{subject: subject, 
				semester: semester
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