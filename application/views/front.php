<html>
	<head>
		<title> login </title>
		<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style>
	#submit{
padding: 10px;
text-align: center;
box-shadow: 0 0 5px;
font-size: 18px;
background: linear-gradient(#22abe9 5%, #36caf0 10%);
color: #ffffff;
font-weight: bold;
cursor: pointer;
text-shadow: 0px 1px 0px #13506D;
}
#submit:hover{
background: linear-gradient(#36caf0 5%, #22abe9 100%);
}
#container{
width:500px;
height:610px;
margin: 50px auto;
}
#reset{
padding: 10px;
text-align: center;
box-shadow: 0 0 5px;
font-size: 18px;
background: linear-gradient(#22abe9 5%, #36caf0 10%);
color: #ffffff;
font-weight: bold;
cursor: pointer;
text-shadow: 0px 1px 0px #13506D;
}
#reset:hover{
background: linear-gradient(#36caf0 5%, #22abe9 10%);
}
#container{
width:500px;
height:610px;
margin: 50px auto;
}

	</style>
	</head>
	<body>
		<div id="container">
		<?php echo form_open('web1/mains1',array('id'=>'form'));?>
		<?php echo form_label('username:');?><?php echo form_error('uname');?>
		<?php echo form_input(array('id'=>'dname','name'=>'username'));?>
		<?php echo form_label('password:');?><?php echo form_error('psswd');?>
		<?php echo form_input(array('id'=>'psswd','name'=>'password'));?>
		<?php echo ('<p id="submit"> Submit</p>');?>
		<?php echo form_close();?>
		</div>
	</body>
	<script>
	$(document).ready(function(){
	$("#submit").click(function(){
	$("#form").submit();
	});
	});
	</script>
</html>