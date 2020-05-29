<style>
#img{
width:1500px;
height:600;
}

</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <h1 style="color:white;"><b><?php echo $this->session->userdata('sts_');?></b></h1>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<?php foreach($menu as $item){?>
      <li class="active">
				<button style="color:white;text-decoration:none;"  class="btn btn-link" id="<?php echo $item->item;?>"><?php echo $item->item;?></button>
		</li>
		<?php } ?>
		<a class="btn" style="color:white;" href="<?php echo site_url('authenticate/logout');?>" >logout</a>
    </ul>
    </div>
</nav>
<div id="pages" style="margin-top:auto"class="container-fluid">
		<div class="text-center">
		<h1><center><?php echo $this->session->userdata('usr_');?></center></h1>
			<img id="img" src="<?php echo base_url();?>images/home.png" class="img-fluid" alt="Responsive image">
		</div>
	</div>
	
<script>
$(document).ready(function(){
	$('#img').hide();
	$('#img').slideToggle('slow');
<?php foreach($menu as $item){?>
	$("#<?php echo $item->item;?>").click(function(){
		$("#pages").load('<?php echo site_url($item->path);?>');
	});
<?php }?>
});
</script>
	
