<html>
	<head>
		<title>
		HOME</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/stylehome.css">
		<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		</head>
		<style>
			body{
			background-image:url("<?php echo base_url('images/'.$this->session->userdata('pic_'));?>")
			
			}
			.btn{
		
		font-weight:normal;
		font-size:20px;
		color:white;
		background-color:none;
		}
		.btn:hover
		{
			font-weight:bold;
			font-size:25px;
			color:white;
		}
	
		</style>
	<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <h3 id="id1">Welcome: <?php echo $this->session->userdata('usr_');?></h3>
	  </div>
	  <ul class="nav navbar-nav">
      <li class="active"><?php foreach($menu as $item){?>
		<button  class=" btn btn-link" id="<?php echo $item->item;?>"><?php echo $item->item;?></button>
		<?php } ?>
		<a href="<?php echo site_url('authenticate/logout');?>" >logout</a>
		</li>
		 
		</ul>
		</div>
		</nav>
		
			<div id="pages" > jkjdhsalkhfkjsabf</div>

	</body>
	<script type="text/javascript">
	$(document).ready(function(){
	$("#manage_session").click(function(){
	$("#pages").load('web/manage_session');
	});
	$("#add_faculty").click(function(){
	$("#pages").load('web/add_fac');
	});
	$("#add_subject").click(function(){
	$("#pages").load('web/add_sub');
	});
	$("#add_parent").click(function(){
	$("#pages").load('web/add_par');
	});
	$("#view_attend").click(function(){
	$("#pages").load('web/view_attend');
	});
	$("#view_feedback").click(function(){
	$("#pages").load('web/view_feedback');
	});
	$("#add_student").click(function(){
	$("#pages").load('web/add_std');
	});
	});
	</script>
</html>
	