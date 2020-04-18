<style>
	.table{
	margin-top:50px;
	}
	.x{
		font-size:20px;
	}
</style>	
	

		<div class="container-fluid ">
				<table class="table table-hover table-striped" >
				<thead class="thead-dark">
				<tr class="text-center" >
				<th scope="col" class="x">Sr no</th>
					<th scope="col" class="x">Name</th>
					<th scope="col" class="x">Feedback</th>
					<th scope="col" class="x">Delete feedback </th>
				</tr>
				</thead>
				<tbody class="c" id="show_data">
				</tbody >
				</table>
				<button  value="submit" style="color:white;" id="check"  class="btn btn-primary float-center">Refresh</button>
		</div>
	</body>
	<script type="text/javascript">
	$(function(){
		$('#check').hide();
		$('#check').on('click',function(){
		$("#pages").load('http://localhost/ams/index.php/web/index4');
		});
		view_feedback();
		function view_feedback(){
		$.ajax({
			type:'ajax',
			url :"<?php echo site_url('web/view_feedback');?>",
			async :false,
			dataType:'json',
			success : function(data){
				
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
				hey += '<tr class="table-primary text-center">'+
					'<td>'+(i+1)+'</td>'+
				'<td>'+data[i].name+'</td>'+
				'<td>'+data[i].feedback+'</td>'+
				'<td>'+'<button  type="submit" class="btn btn-danger danger-item" id="'+data[i].feedback_id+'" ><i class="fas fa-trash-alt" style="color:white;"></i></button>'+'</td>'+
				'</tr>';
			}
				$('#show_data').html(hey);
			
			},
			error:function()
			{
			alert('fail');
			}
		
			});
				return false;
		}
		$(".danger-item").on('click',function(){
		var id = $(this).attr('id');
		if(confirm('are you sure you want to delete?'))
		{	
	
			$.ajax({
			 url:"<?php echo site_url('/web/deletefeed');?>",
				method:"POST",
				data:{id:id},
				success:function(res){
					if(res == 1)
					{
			alert('deleted successfully...');
			
					}
					
					$('#check').slideDown('slow');
				}
				
			});
			
		}
	});
});
</script>