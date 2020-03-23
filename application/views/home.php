<html>
	<head>
		<title>
		HOME</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/stylehome.css">
		<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>
	<style>
	body{
	background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>)	
	}
	</style>
		
	</head>
	<body>
	
	<div class="top">
	<header><h1 class="right">  welcome: <?php echo $this->session->userdata('usr_');?><center><?php echo $this->session->userdata('sts_');?></center> </h1></header>
	</div>
		<div class="div1">
		<?php foreach($menu as $item){?>
		<div  class="mymenus"><a href="<?php echo site_url($item->path);?>"><?php echo $item->item;?></a></div>
		<div class="newline_"></div>
		<?php } ?>
		</div>
		<div class="pages">
	
		<h1>bfjdbsjfndglkdjgn;ldkmgnl0d</h1>
		</div>
	</body>
</html>