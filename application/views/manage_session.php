<style>
	body
	{
		background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
		background-size:cover;
		background-repeat:no-repeat;
	}
	.container
	{
		height: 450px;
		margin-top: 150px;
		margin-bottom: auto;
		width: 500px;
		background-color: rgba(0,0,0,0.5);
	}
	.c
	{
		color:white;
		margin-top:10px;
		font-size:20px;
	}
	.social_icon span
	{
		font-size: 70px;
	}
	.social_icon span a i
	{
		color:#FFC312;
	}
	.social_icon span a i:hover
	{
		color: blue;
		cursor: pointer;
	}
	.btn
	{
		color:white;
	}
</style>
<form id="myform" method="post" name="myform" role="form">
	<div class="container" >
		
		<div class="form-group">
		<label for="session_id" class="c">Session Id:</label>
			<input type="text" class="form-control" id="sess_id" name="id" >
		</div>
		<div class="form-group">
		<label for="start" class="c">Start Date:</label>
			<input type="date" class="form-control" id="start" name="start" >
		</div>
		<div class="form-group">
		<label for="end" class="c"> End Date</label>
			<input type="date" class="form-control" id="end" name="end">
		</div>
		<button  id="btn"  class="btn btn-primary float-right">submit</button>
		<input id="rst" type="reset" class="btn btn-primary float-left">
	</div>
</form>
<script>
$(document).ready(function(){
	$("#myform").hide();
	$("#myform").slideDown('slow');
	$('#btn').on('click',function(){
		var sess_id = $('#sess_id').val();
		var start = $('#start').val();
		var end = $('#end').val();
		if(sess_id != '' && start != '' && end != '')
		{
			jQuery.ajax({
				type: "POST",
				url: "<?php echo site_url('/web/insert_session'); ?>",
				dataType: 'html',
				data: {sess_id: sess_id, start:start,end:end},
				success: function(res) 
				{
					if(res==1)
					{
						alert('session created');	
					}
			
				},
				error:function()
				{
					alert(' session exist');	
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