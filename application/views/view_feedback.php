<style>
	.table{
	margin-top:50px;
	}
</style>	
	

		<div class="container-fluid ">
				<table class="table table-hover table-striped" >
				<thead class="thead-dark">
				<tr class="text-center">
				<th scope="col">Sr no</th>
					<th scope="col">Parent Name</th>
					<th scope="col">Feedback</th>
					<th scope="col">Delete feedback </th>
				</tr>
				</thead>
				<tbody class="c" id="show_data">
				</tbody >
				</table>
		</div>
	</body>
	<script type="text/javascript">
	$(function(){
		view_feedback();
		function view_feedback(){
		$.ajax({
			type:'ajax',
			url :"<?php echo site_url('feedcntl/view_feedback');?>",
			async :false,
			dataType:'json',
			success : function(data){
				
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
				hey += '<tr class="table-primary text-center">'+
					'<td>'+(i+1)+'</td>'+
				'<td>'+data[i].parent_name+'</td>'+
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
		alert(id);
		if(confirm('are you sure you want to delete?'))
		{	
	
			$.ajax({
			 url:"<?php echo site_url('/feedcntl/deletefeed');?>",
				method:"POST",
				data:{id:id},
				success:function(res){
			
			}
			});
		}
		return false;
	});
});
</script>

		

	echo "Total selected - " . count($data) . "<br>";
		for($i=0;$i<count($data);$i++){
			echo "Data found is " .$data[$i] ."<br>";
		}