<html>
<head>
<title> add subject </title>

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
width:400px;
height:400px;
left:550px;
background-color:#042331;
color:white;
margin-top:100px;
opacity:0.8;
}

.bt
{
margin-top:55px;
border:black;
color:white;
background-color:black;
font-size:20px;
}

</style>
<body>
<div class="add_fa" align="center">
<a href="<?php echo site_url('web');?>"><input type="button" value="home" class="bt"></a>
<header><h1><i class="fas fa-user-plus"></i>Add Subject</h1></header>
<form class="form" method="post" action="<?php echo site_url('web/add_subject');?>">
<label>Subject Code :</label><input type="text"  name="c1"/></br></br>
<label>Subject :</label><input type="text"  name="sub1"/></br></br>
<input type="submit" value="add" class="bt">
<input type="reset" value="reset" class="bt"></br></br>
</form>
</div>
</body>
</html>