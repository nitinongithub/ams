		<style>
			.par1{
		height:700px;
		background-color:white;
		margin-top:0px;
		}
		.par{
		height:700px;
		background-color:#FFC312;
		}
		.img-fluid{
		width:10%;
		height:10%;
		margin-left:30px;
		}
		 h2{
		color:red;
		}
		</style>
	<div class="container-fluid par">
		<div class="container par1">
			<div class="text-center">
				<img src="<?php echo base_url();?>images/amrapali1.png" class="img-fluid" alt="Responsive image">
				<div class="header">
				<h2>Amrapali Group Of Institutes</h2>
				<h4>Shiksha Nagar,Haldwani</h4><br>
				<h1 style="color:black">Parent Details</h1>
				</div>
			</div>
			<div class="table-responsive-lg">
		<table class="table table-dark table-bordered" style="margin-top:50px; height:150px;">
				<tr id="showpar">
				</tr>
				<tr id="showem">
				</tr>
				<tr id="showcon">
				</tr>
				<tr id="showrel">
				</tr>
				</table>
				</div>
		</div>
	</div>
	</body>
	<script>
	$(function(){
		view_profilepar();
		function view_profilepar(){
			$.ajax({
			type:'ajax',
			url :"<?php echo site_url('web/view_profiles');?>",
			async :false,
			dataType:'json',
			success : function(data){
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
					hey += '<th ">Parent Name</th>';
				hey += '<td >'+data[i].parent_name+'</td>';
			$('#showpar').html(hey);
			}
			var em= '';
			var i;
			for(i=0;i< data.length;i++){
					em += '<th>Email</th>';
				em += '<td>'+data[i].email+'</td>';
			$('#showem').html(em);
			}
			var em= '';
			var i;
			for(i=0;i< data.length;i++){
					em += '<th>Contact</th>';
				em += '<td>'+data[i].contact+'</td>';
			$('#showcon').html(em);
			}
			var em= '';
			var i;
			for(i=0;i< data.length;i++){
				em += '<th>Relation</th>';
				em += '<td>'+data[i].relation+'</td>';
			$('#showrel').html(em);
			}
			},
			error:function()
			{
			alert('fail');
			}
			});
		}
	});
</script>