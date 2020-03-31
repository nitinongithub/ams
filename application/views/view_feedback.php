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
				<table class="table table-bordered">
				<thead class="thead-dark">
				<tr>
					<th scope="col">Parent Name</th>
					<th scope="col">Feedback</th>
					<th scope="col">Feedback Delete</th>
				</tr>
				</thead>
				<tbody class="c">
				<?php foreach($data as $value){?>
				<tr class="table-primary">
				<td ><?php echo $value->parent_name;?></td>
				<td><?php echo $value->feedback;?></td>
				<td><?php echo "<a href='deletedata?id=".$value->feedback_id."'>delete</a>";?></td>
				<tr>
				<?php }?>
				</tbody>
				</table>
		</div>
	</body>
</html>