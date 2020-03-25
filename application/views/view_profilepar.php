<html>
	<head>
		<title> parent details</title>
		<style>
			.main{
			position:fixed;
			width:1510px;
			height:700px;
			border:2px solid #063146;
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
		</style>
	</head>
	<body>
		<div class="main">
		<center><img src="<?php echo base_url();?>images/amrapali1.png">
		<h2 class="c"><b><i>AMRAPALI GROUP OF INSTITUTES</i></b></h2>
		<h2 class="c1"><b> <u>Parent Details</u> </b></h2></center>
		<table border="1" class="tab">
		<?php foreach($save as $item){?>
			<tr>
				<td>Parent Name:</td>
				<td class="cl2"><b><?php echo $item->parent_name;?></b></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td class="cl2"><b><?php echo $item->email;?></b></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td class="cl2"><b><?php echo $item->contact;?></b></td>
			</tr>
			<tr>	
				<td>Relation:</td>
				<td class="cl2"><b><?php echo $item->relation;?></b></td>
			</tr>
		<?php }?>
		</table>
			<center>
			<a href="<?php echo site_url('web');?>"><input type="button" value="home" class="btn"></a>
			</center>
		</div>
	</body>
</html>