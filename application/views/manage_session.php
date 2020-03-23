<html>
	<head>
		<title> manage session </title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/style7.css">
		<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>
	</head>
	<style>
		body{
			background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
			background-size:cover;
	background-repeat:no-repeat;
		}
		.add_fa
{
	position:fixed;
border:2px solid #042331;
width:600px;
height:500px;
left:450px;
background-color:#042331;
color:white;
margin-top:100px;
opacity:0.8;
}

.bt
{
margin-top:60px;
border:black;
color:white;
background-color:#800000;
font-size:20px;
}

	</style>
	<body>
		<div class="add_fa" align="center" >
		<a href="<?php echo site_url('web');?>"><input type="button" value="home" class="bt"></a>
		<header><h1><i class="fas fa-user-plus"></i>Manage Session</h1></header>
		<form class="form" method="post" action="<?php echo site_url('web/insert_session');?>">
			<label>Session_id:</label><input type="text" class="cl1" name="id" id="id1"/></br></br>
			<label>Start Date:</label><input type="date" class="cl2" name="start" id="id2"/></br></br>
			<label>End Date:</label><input type="date" class="cl5" name="end" id="id3"/></br></br>
			<input type="submit" value="add" class="bt">
			<input type="reset" value="reset" class="bt" ></br></br>
		</form>
		</div>
	</body>
	<script>
	function fun1()
	{
		var a = document.GetElementBy("id1").value;	
		var b = document.GetElementBy("id2").value;
		var c = document.GetElementBy("id3").value;
		if(a && b && c !='null')
		{
			alert('session-reated successfully');
		}
		else
		{
			alert('error');
		}
	}
	</script>
</html>