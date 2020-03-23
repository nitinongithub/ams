<html>
<head>
<title> add faculty </title>

<link rel="stylesheet" href="<?php echo base_url();?>css/style7.css">
<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="add_fac" align="center">
<a href="<?php echo site_url('web/admin');?>"><input type="button" value="admin" class="btn"></a>
<header><h1><i class="fas fa-user-plus"></i>add faculty</h1></header>
<form class="form" method="post">
<label>Username:</label><input type="text" class="cl1" name="username"/></br></br>
<label>Password:</label><input type="password" class="cl2" name="password"/></br></br>
<label>Status:</label><input type="text" class="cl3" name="status"/></br></br>
<label>Faculty Name :</label><input type="text" class="cl4" name="faculty name"/></br></br>
<label>E-mail:</label><input type="text" class="cl5" name="fac_email"/></br></br>
<label>Contact:</label><input type="number" class="cl6" name="contact"/></br></br>
<label>Department:</label><select class="cl7" name="department">
    <option value="FTCS">FTCS</option>
    <option value="FCBM">FCBM</option>
    <option value="AITS">AITS</option>
	<option value="AIHM">AIHM</option>
	<option value="B.ED">B.ed</option>
  </select></br></br>
<input type="submit" value="add" class="btn">
<input type="reset" value="reset" class="btn"></br></br>
</form>
</div>
</body>
</html>