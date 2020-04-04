<html>
	<head>
		<title> mark attendance </title>
		<style>
			.top{
			position:fixed;
			width:1515px;
			height:60px;
			border:1px solid #063146;
			background-color:#063146;
			color:white;
			font-size:30px;
			font-family:verdana;
			top:0px;
			}
			.bottom{
			position:fixed;
			width:1515px;
			height:680px;
			border:1px solid #063146;
			margin-top:70px;
			font-family:verdana;
			top:0px;
			}
			.select{
			padding-top:5px;
			margin-right:20px;
			}
			.btn
			{
				background-color:black;
				color:white;
				margin-top:5px;
				font-size:20px;
				border-color:black;
			}
			.tab{
				margin-top:20px;
			width:100%;
			border-collapse:collapse;
			height:50px;
			}
			.t{
			background-color:#063146;
			color:white;
			font-family:verdana;
			font-size:30px;
			text-align:center;
			}
			.c1{
				font-size:20px;
			}
			.c2{
			font-size:20px;
			margin-left:1100px;
			}
			a{
				color:white;
				text-decoration:none;
			}
		</style>
	</head>
	<body>
		<div class="top">
			<form method="post" action="<?php site_url('web/mark_attendance');?>">
		
				<?php foreach($b as $i){?>
					<label><?php echo "<a href='mark_attendance?id=".$i->faculty_id."'>Department:</a>";?></label>
				<?php }?>	
					<select name="dept" class="select">
						<?php foreach($f as $i){?>
						<option><?php echo $i->dept_id;?></option>
					<?php }?>
					</select>
					<?php foreach($f as $i){?>
					<label><?php echo "<a href='mark_attendance?id=".$i->dept_id."'>course:</a>";?></label>
					<?php }?>
					<select name="course" class="select">
					<?php foreach($a as $i){?>
						<option><?php echo $i->course_id;?></option>
					<?php }?>
					</select>
					<?php foreach($a as $i){?>
					<label><?php echo "<a href='mark_attendance?id=".$i->course_id."'>Semester:</a>";?></label>
					<?php }?>
					<select name="semester" class="select">
						<?php foreach($c as $i){?>
						<option value="<?php echo $i->semester_id;?>"><?php echo $i->semester_id;?></option>
					<?php }?>
					</select>
				<input type="submit" value="select student" name="submit" class="btn">
			
			</form>
		</div>
		<div class="bottom">
			<form method="post" action="<?php site_url('web/submitattend');?>">
				<center>
						<label class="c1">
							Date:<input type="date" name="date">
						</label>
						<?php foreach($b as $i){?>
						<label>Faculty Id:</label>
						<select name="id">
							<option value="<?php echo $i->faculty_id?>"><?php echo $i->faculty_id?></option>
							</select>
						<?php }?>
						<label>course:</label>
							<select name="course" class="select">
							<?php foreach($g as $i){?>
								<option value="<?php echo $i->course_id;?>"><?php echo $i->course_id;?></option>
							<?php }?>
							</select>		
						<label >Subject:</label>
							<select name="subject" class="select">
							<?php foreach($e as $i){?>
								<option value="<?php echo $i->subject_name;?>"><?php echo $i->subject_name;?></option>
							<?php }?>
						</select>
					</center>
					<table class="tab" border="1">
						<tr>
							<td class="t">Roll No</td>
							<td class="t">Enrollment No</td>
							<td class="t">Student Name</td>
							<td class="t">Status</td>
						</tr>

						<?php foreach($d as $i){?>
						<tr>
							<td><?php echo $i->roll_no;?></td>
							<td name="enroll"><?php echo $i->enrollment_no;?></td>
							<td><?php echo $i->student_name;?></td>
							<td>Present:<input type="radio" name="attend_<?php echo $i->enrollment_no;?>"> Absent:<input type="radio" name="attend_<?php echo $i->enrollment_no;?>"></td>
						</tr>
						<?php }?>
					</table>
					<center><input type="submit" value="submit" class="btn">
					<a href="<?php echo site_url('web');?>"><input type="button" value="home" class="btn"></a>
				</center>
			</form>
		</div>
	</body>
</html>