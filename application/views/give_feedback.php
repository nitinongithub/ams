
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css">


	<div class="bg-contact2" style="background-image:url(<?php echo base_url('images/tech.jpg');?>);">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form">
					<span class="contact2-form-title">
						<b>Feedback Portal</b>
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
					<span class="focus-input2" data-placeholder="NAME"></span>
						<input class="input2" type="text" name="name" id="name">
						
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
					<span class="focus-input2" data-placeholder="FEEDBACK"></span>
						<textarea class="input2" name="feed" id="feed"  ></textarea>
						
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn" ></div>
							<button class="contact2-form-btn" id="btn">
								Give Your Feedback
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<script>
$(document).ready(function(){
	$('#btn').on('click',function(){
		var name = $('#name').val();
		var feedback = $('#feed').val();
		if( parent != '' && feedback != '')
		{
			jQuery.ajax({
				type: "POST",
				url: "<?php echo site_url('/web/give_feedback');?>",
				dataType: 'html',
				data: 
				{name: name, 
				feedback:feedback
				},
				success: function(res) 
				{
					if(res==1)
					{
						alert(' success');
						$("#pages").load('http://localhost/ams/index.php/web/feedback');
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