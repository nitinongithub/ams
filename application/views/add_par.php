<html>
	<head>
		<title> add parent</title>
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
		<header><h1>add parent</h1></header>
			<form class="form" method="post" action="<?php echo site_url('web/add_parent');?>">
				<h3><b><i> login details</i></b></h3>
				<label>Username:</label><input type="text" class="cl1" name="username" required></br></br>
				<label>Password:</label><input type="password" class="cl2" name="password" required></br></br>
				<h3><b><i> personal details</i></b></h3>
				<label>Father / mother Name</label><input type="text" class="cl3" name="parent" required></br></br>
				<label>E-mail:</label><input type="text" class="cl5" name="fac_email" required></br></br>
				<label>Contact:</label><input type="number" class="cl6" name="contact" required></br></br>
				<label>Relation :</label>
				<select name="relation">
					<option name="father">Father</option>
					<option name="mother">Mother</option>
					<option name="other">Other</option>
				</select></br></br>
				<input type="submit" value="add" class="btn">
				<input type="reset" value="reset" class="btn"></br></br>
			</form>
		</div>
	</body>
</html>