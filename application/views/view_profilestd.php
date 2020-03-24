<html>
<head>
<title> student details</title>
<style>
.main{
position:fixed;
width:1510px;
height:740px;
border:2px solid #063146;
}
img{
width:60px;
height:60px;
}
.c{
	font_family:verdana;
	color:red;
}
.c1{
	font_family:verdana;
	color:#063146;
}
.cl2{
	font_family:verdana;
	color:#042331;
	text-align:center;
}
.tab{
width:90%;
height:100px;
margin-left:70px;
border:2px solid #063146;
border-collapse:collapse;
font-size:25px;
font-family:verdana;
}
.tab1{
width:90%;
height:50px;

margin-left:70px;
border:2px solid #063146;
border-collapse:collapse;
font-size:25px;
font-family:verdana;

}
.x{
	text-align:center;
	color:white;
	background-color:#063146;
}
.btn
{
	background-color:#063146;
	color:white;
	margin-top:5px;
	font-size:20px;
	border-color:#063146;
}
.std{
text-color:black;
}
a{
text-decoration:none;
color:black;
}
.sub{
background-color:#063146;
color:white;
}
</style>
</head>
<body>
<div class="main">
<center><img src="<?php echo base_url();?>images/amrapali1.png">
<h2 class="c"><b><i>AMRAPALI GROUP OF INSTITUTES</i></b></h2>
<h2 class="c1"><b> Student Details </b></h2></center>
<table border="1" class="tab">
<?php foreach($save as $item){?>
<tr>
	<td>Enrollment No:</td>
	<td class="cl2"><b><?php echo $item->enrollment_no;?></b></td>
</tr>
<tr>
	<td>Student's Roll_no:</td>
	<td class="cl2"><b><?php echo $item->roll_no;?></b></td>
</tr>
<tr>
	<td>Student Name:</td>
	<td class="cl2"><b><?php echo $item->student_name;?></b></td>
</tr>
<tr>	
	<td>Email:</td>
	<td class="cl2"><b><?php echo $item->email;?></b></td>
</tr>
<tr>
	<td>Contact:</td>
	<td class="cl2"><b><?php echo $item->contact;?></b></td>
</tr>
<tr>
	<td>Department:</td>
	<td class="cl2"><b><?php echo $item->dept_name;?></b></td>
</tr>
<tr>
	<td>Course:</td>
	<td class="cl2"><b><?php echo $item->course_name;?></b></td>
</tr>
<tr>
	<td>Semester:</td>
	<td class="cl2"><b><?php echo $item->semester_name;?></b></td>
</tr>
<?php }?>
</table>
<?php foreach($save as $item){?>
<center><h2><?php echo "<a  href='view_profilestd?id=".$item->semester_id."'>Subject Details</a>";?></h2></center>
<?php }?>
<table border="1" class="tab1">
<tr>
<td class="x"> SUBJECTS</td>
</tr>

<?php foreach($a as $item){?>

<td><?php echo $item->subject_name;?></td>
</tr>
<?php }?>
</table>

<center><a href="<?php echo site_url('web');?>"><input type="button" value="home" class="btn"></a></center>
</div>
</body>
</html>