<html>
	<head>
		<title> parent details</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/style7.css">
		<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"  crossorigin="anonymous">
		<style>
			.bdr{
		height:100%;
		background-color:white;
		margin-top:0px;
		}
		.adr{
		height:100%;
		background-color:#FFC312;
		}
		.img-fluid{
		width:10%;
		height:10%;
		}
		 h2{
		color:red;
		}
		</style>
	</head>
	<body>
	<div class="container-fluid adr">
		<div class="container bdr">
			<div class="text-center">
				<img src="<?php echo base_url();?>images/amrapali1.png" class="img-fluid" alt="Responsive image">
				<div class="header">
				<h2>Amrapali Group Of Institutes</h2>
				<h4>Shiksha Nagar,Haldwani</h4><br>
				<h1>Parent Details</h1>
				</div>
			</div>
			<table class="table table-hover">
			<?php foreach($save as $item){?>
					<tr>
						<th scope="row">Parent Name</th>						
						<td><?php echo $item->parent_name;?></td>
					</tr>
					<tr>
						<th scope="row">Email</th>						
						<td><?php echo $item->email;?></td>
					</tr>
					<tr>
						<th scope="row">Contact</th>						
						<td><?php echo $item->contact;?></td>
					</tr>
					<tr>
						<th scope="row">Parent Name</th>						
						<td><?php echo $item->parent_name;?></td>
					</tr>
					<tr>
						<th scope="row">Relation:</th>						
						<td><?php echo $item->relation;?></td>
					</tr>
			<?php }?>
			</table>
		</div>
	</div>
	</body>
</html>