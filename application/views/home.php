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
			
			.navbar{
		color:black;
		}	
		.btn{
		color:black;
		}
		.bdr{
			margin-top:10px;
		height:50px;
		background-color:#FFC312;
		}
		body{
				background-image:url(<?php echo base_url('images/tech1.jpg');?>);
				background-size:cover;
		background-repeat:no-repeat;
			}
	#pages{
	width:100%;
	height:auto;
	}
	#pages{
	border:2px solid red;
	}
	</style>
	<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid bdr">
			<div class="navbar-header">
				<h3 id="id1">Welcome: <?php echo $this->session->userdata('usr_');?></h3>
			</div>
			
			<ul class="nav navbar-nav">
			<li class="active"><?php foreach($menu as $item){?>
			<button  class=" btn btn-link" id="<?php echo $item->item;?>"><?php echo $item->item;?></button>
			<?php } ?>
			<a class="btn" href="<?php echo site_url('authenticate/logout');?>" >logout</a>
			</li>
		 </ul>
	</div>
	</nav>
	  </div>
</div>
		
			<div id="pages" class="container-fluid" >
			<h1><center><?php echo $this->session->userdata('sts_');?></center></h1>
			</div>
			



	</body>
	
	<script type="text/javascript">
	<?php foreach($menu as $item){?>
	$(document).ready(function(){
	$("#<?php echo $item->item;?>").click(function(){
	$("#pages").load('<?php echo $item->path;?>');
	});
	});
	<?php }?>
	
	</script>
</html>
	