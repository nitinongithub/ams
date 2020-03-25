<html>
	<head>
		<title> add student</title>
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
	<div class="add_fac">
		<center><a href="<?php echo site_url('web');?>"><input type="button" value="home" class="btn"></a></center>
		<center><header><h1><i class="fas fa-user-plus"></i>add student details</h1></header></center>
		<form class="form" align="center" method="post" action="<?php echo site_url('web/add_student');?>">
			<h3><b><i> login details</i></b></h3>
			<label>Username:</label><input type="text" class="cl" name="username" required><br><br>
			<label>Password:</label><input type="password" class="cl" name="password" required></br></br>
			<h3><b><i> Academic details</i></b></h3>
			<label>Enrollment_no:</label><input type="text" class="cl" name="enroll" required><br><br>
			<label>Student Name :</label><input type="text" class="cl" name="std_name" required><br><br>
			<label>Roll_no:</label><input type="number" class="cl" name="roll_no" required><br><br>
			<label>E-mail:</label><input type="text" class="cl" name="std_email" required><br><br>
			<label>Contact:</label><input type="number" class="cl" name="contact" required><br><br>
			<label>Department:</label>
				<select name="dept" class="cl">
				<?php foreach($a as $item){?>
					<option><?php echo $item->dept_id;?> </option>
				<?php }?>
				</select></br></br>
			<label>Course_id:</label>
				<select name="course" class="cl">
				<?php foreach($b as $item){?>
					<option><?php echo $item->course_id;?> </option>
				<?php }?>
				</select></br></br>
			<label>Semester_id:</label>
				<select name="semester" class="cl">
				<?php foreach($c as $item){?>
					<option><?php echo $item->semester_id;?> </option>
				<?php }?>
				</select></br></br>
				<center><input type="submit" value="add" class="btn">
				<input type="reset" value="reset" class="btn"></br></br>
			</center>
		</form>
	</div>
</head>
</html>