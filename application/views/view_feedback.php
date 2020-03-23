<html>
	<head>
		<title> feedback </title>
		
	</head>
	<style>
	body{
	background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
	background-size:cover;
	background-repeat:no-repeat;
		}
	.tab{
		border-collapse:collapse;


	

	}
	h1{
	color:white;
	top:0px;
	}
	.c{
		text-align:center;
		color:white;
		border: 3px solid black;
	 font-size:20px;
	 font-family:verdana;
	background-color:#042331;	
	}
	.btn
{
margin-top:15px;
border:black;
color:white;
background-color:black;
font-size:25px;
}
	</style>
	<body>
	
	<table width="100%" align="center" border="1" class="tab">
	<tr>
		<td class="c"><b>parent name</b></td>
		<td class="c"><b>Feedback</b></td>
		<td class="c"><b>Feedback Delete</b></td>
	</tr>
	<?php foreach($data as $value){?>
	<tr>
		<td class="c1"><center><?php echo $value->parent_name;?></center> </td>
		<td class="c2"><center><?php echo $value->feedback;?></center></td>
		<td><center> <?php echo "<a href='deletedata?id=".$value->feedback_id."'>delete</a>";?></center></td>
	</tr>
	<?php }?>
	
	</table>
	<a href="<?php echo site_url('web');?>"><center><input type="button" class="btn" value="home"></center></a>
	</body>
</html>