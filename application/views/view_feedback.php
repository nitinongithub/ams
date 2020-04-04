<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <title>view feedback</title>
	<style>
	.table{
	margin-top:50px;
	}
		
	</style>
	</head>
	<body>
		<div class="container-fluid ">
				<table class="table table-striped table-bordered" >
				<thead class="thead-dark">
				<tr class="text-center">
					<th scope="col">Parent Name</th>
					<th scope="col">Feedback</th>
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
			url :"<?php echo site_url('web/view_feedback');?>",
			async :false,
			dataType:'json',
			success : function(data){
				
			var hey= '';
			var i;
			for(i=0;i< data.length;i++){
				hey += '<tr class="table-primary text-center">'+
				'<td>'+data[i].parent_name+'</td>'+
				'<td>'+data[i].feedback+'</td>'+
				'</td>'+
				'</tr>';
			}
				$('#show_data').html(hey);
			
			},
			error:function()
			{
			alert('fail');
			}
			});
		}
	});
	
	</script>
</html>

	function add_session()
	{
		var parameter = $("#myform").serialize();
		$.post("<?php echo site_url('web/insert_session');?>",parameter,
		function(res)
		{
			alert('session created successfully');
		});
	}
		
	