<html>
<head>
<title> add faculty </title>

<link rel="stylesheet" href="<?php echo base_url();?>css/style7.css">
<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>
</head>
<style>
body{
	background-image:url(<?php echo base_url('images/'.$this->session->userdata('pic_'));?>);
	background-size:cover;
	background-repeat:no-repeat;
}
</style>
<body>
<div class="add_fac" align="center">
<a href="<?php echo site_url('web');?>"><input type="button" value="home" class="btn"></a>
<header><h1><i class="fas fa-user-plus"></i>add faculty</h1></header>
<form class="form" method="post" action="<?php echo site_url('web/add_faculty');?>">
<h3><b><i> login details</i></b></h3>
<label>Username:</label><input type="text" class="cl1" name="username" required>
<label>Password:</label><input type="password" class="cl2" name="password" required></br></br>
<h3><b><i> personal details</i></b></h3>
<label>Id:</label><input type="number" class="cl1" name="fac_id" required></br></br>
<label>E-mail:</label><input type="text" class="cl5" name="fac_email" required></br></br>
<label>Faculty Name :</label><input type="text" class="cl4" name="fac_name" required></br></br>
<label>Contact:</label><input type="number" class="cl6" name="contact" required>
<label>Department:</label><select name="dept">
	<option name="ftcs">ftcs</option>
	<option name="fcbm">fcbm</option>
</select></br></br>
<input type="submit" value="add" class="btn">
<input type="reset" value="reset" class="btn"></br></br>
</form>
<h3><b><i> teaching details</i></b></h3>
<form class="form" method="post" action="<?php echo site_url('web/add_subfaculty');?>">
<label>Id:</label><input type="number" class="cl1" name="fac_id" required></br></br>

<label>course code:</label><input type="text" class="cl3" name="course" required></br></br>
<label>semester :</label><input type="text" class="cl6" name="semester" required></br></br>
<label>subject Code:</label><input type="text" class="cl3" name="subject" required>
<label>class:</label><input type="text" class="cl6" name="class" required></br></br>
<input type="submit" value="add" class="btn">
<input type="reset" value="reset" class="btn"></br></br>
</form>
</div>
