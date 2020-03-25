<html>
	<head>
		<title> Faculty details</title>
		<style>
			.main{
			position:fixed;
			width:1510px;
			height:700px;
			border:5px solid #063146;
			}
			img{
			width:70px;
			height:70px;
			}
			.c{
				font_family:verdana;
				color:red;
			}
			.c1{
				font_family:verdana;
				color:#063146;
			}
			.cl2{
				font_family:verdana;
				color:#042331;
				text-align:center;
			}
			.tab{
			width:90%;
			height:100px;
			margin-left:70px;
			border:2px solid #063146;
			border-collapse:collapse;
			font-size:25px;
			font-family:verdana;
			}
			.btn
			{
				background-color:#063146;
				color:white;
				margin-top:5px;
				font-size:20px;
				border-color:#063146;
			}
			.cc{
			background-color:#063146;
			color:white;
			}
		</style>
	</head>
	<body>
		<div class="main">
			<center><img src="<?php echo base_url();?>images/amrapali1.png">
			<h2 class="c"><b><i>AMRAPALI GROUP OF INSTITUTES</i></b></h2>
			<h2 class="c1"><b> <u>faculty Details</u> </b></h2></center>
			<table border="1" class="tab">
			<?php foreach($x as $item){?>
				<tr>
					<td>Faculty Name:</td>
					<td class="cl2"><b><?php echo $item->faculty_name;?></b></td>
				</tr>
				<tr>
					<td>Contact:</td>
					<td class="cl2"><b><?php echo $item->contact;?></b></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td class="cl2"><b><?php echo $item->email;?></b></td>
				</tr>
				<tr>	
					<td>Department:</td>
					<td class="cl2"><b><?php echo $item->dept_name;?></b></td>
				</tr>
			<?php } ?>
			</table>
			<center><h2><b> <u>Academic teaching Details</u> </b></h2></center>
			<table border="1" class="tab">

				<tr>
					<td class="cc">Subject:</td>
					<td class="cc">Course:</td>
					<td class="cc">Class:</td>
				</tr>
			<?php foreach($y as $item){?>
				<tr>
					<td class="cl2"><b><?php echo $item->subject_name;?></b></td>
					<td class="cl2"><b><?php echo $item->course_name;?></b></td>
					<td class="cl2"><b><?php echo $item->class;?></b></td>
				</tr>
			<?php }?>
			</table>
			<center><a href="<?php echo site_url('web');?>"><input type="button" value="home" class="btn"></a></center>
		</div>
	</body>
</html>