<html>
<head>
<title> mark attendance</title>
<style>
.div1{
position:fixed;
width:1524px;
height:50px;
background-color:#042331;
}
.div2{
position:absolute;
width:1520px;
height:690px;
background-color:white;
margin-top:50px;
border:2px solid #042331;
}
.mark
{
	padding-top:5px;
	font-size:30px;
	color:white;
	padding-left:10px;
}
.c{
	margin-right:70px;
}
h1{
	font-family:verdana;
}
.btn
{
	background-color:#063146;
	color:white;
	margin-top:5px;
	font-size:20px;
	border-color:#063146;
}
.tab{
	margin-left:0px;
width:1520px;
height:100px;
border-collapse:collapse;
}
.t{
	color:white;
	background-color:black;
	font-size:20px;
	font-family:verdana;
text-align:center;
}
a{
	color:white;
}
</style>
</head>
<body>
<div class="div1">
<form class="mark" method="post" action="<?php echo site_url('web/mark_attendance');?>">
<?php foreach($a as $item){?>
<label><?php echo "<a href='mark_attendance?id=".$item->faculty_id."'>subject</a>" ?></label>
<?php }?>
<select name="subject">
<?php foreach($s as $item){?>
<option ><?php echo $item->subject_code;?></option>
<?php }?>
</select>
<input type="submit" value="submit" class="btn">
</form>
</div>
<div class="div2">
<table border="1" class="tab">
<tr class="t">
<td> Roll No </td>
<td> Enrollment no </td>
<td> Student Name </td>
<td> Attendance</td>
</tr>
<?php foreach ($save as $item) {?>
<tr>
<td> <?php echo $item->roll_no;?></td>
<td> <?php echo $item->enrollment_no;?></td>
<td> <?php echo $item->student_name;?></td>
<td> 
present:<input type="radio">
absent:<input type="radio">
</td>
</tr>
<?php }?>
</table>
<center><a href="<?php echo site_url('web');?>"><input type="button" value="home" class="btn"></a></center>
</div>
</body>
</html>