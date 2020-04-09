
	<style>
	body{
			background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
			background-size:cover;
			background-repeat:no-repeat;
			}
			.container{
				height: 50%;
				margin-top: 100px;
				margin-bottom: auto;
				width: 500px;
				background-color: rgba(0,0,0,0.5);
				}
			.card-header{
			color:white;
			}
			.input-group-prepend span{
			color:black;
			font-weight:bold;
			background-color:#FFC312;
			}
	</style>
	<div class="container">
	<div class="card-header" id="dot">
		<form id="form1" method="post" name="form1" type="form">
			<h4>Give Feedback</h4>
				<div class="form-group">
				<label for="parent" class="c">Parent Name</label>
				<input type="text" class="form-control" id="parent" name="parent" required>
				</div>
				<div class="form-group">
				<label for="feedback" class="c">feedback</label>
				<textarea class="form-control" name="feedback" rows="5" id="feed" required></textarea>
			</div>
			<button   id="btn"  value="submit" class="btn btn-primary float-right">submit</button>
			</div>
		</div>
	</body>
	<script>
	$(document).ready(function(){
		$("#form1").hide();
		$("#form1").slideDown('slow');
	});
	$(document).ready(function(){
		$('#btn').on('click',function(){
			var parent = $('#parent').val();
			var feedback = $('#feed').val();
			if( parent != '' && feedback != '')
			{
				jQuery.ajax({
				type: "POST",
				url: "<?php echo site_url('/web/give_feedback');?>",
				dataType: 'html',
				data: 
				{parent: parent, 
				feedback:feedback
				},
				success: function(res) 
				{
					if(res==1)
					{
						alert(' success');	
					}
			
				},
				error:function()
				{
					alert('error');	
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