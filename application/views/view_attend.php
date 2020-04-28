<style>
	.std1
	{
		height:auto;
		background-color:white;
		margin-top:0px;
	}
	.std
	{
		margin-top:0px;
		height:auto;
		background-color:#A98190;
	}
	h2
	{
		color:#A98190;
	}
	.img-fluid
	{
		width:10%;
		height:10%;
		margin-left:30px;
	}
	a
	{
		color:white;
	}
	a.hover
	{
		color:white;
	}
	#x{
	font-size:20px;
	}
	#y{
	font-size:20px;
	}
	#z{
	font-size:20px;
	}
	.item{
	width:400px;
	height:100px;
	}
</style>
<div class="container-fluid std">
	<div class="container std1">
		<div class="text-center">
		<img src="<?php echo base_url();?>images/amrapali1.png" class="img-fluid">
			<div class="header">
				<h2 id="top" style="color:red;text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15);">Amrapali Group Of Institutes</h2>
				<h4>Shiksha Nagar,Haldwani</h4><br>
				<h3><u><b>Attendance</b></u></h3>
			</div>
		</div>
		<form id="viewall"  name="viewall" method="post" type="form">
<div class="container item">
				<div class="form-group">
				<label id="x" for="enroll" class="col-2 col-form-label">Enrollment:</label>
					<div class="col-10">
						<input class="form-control" type="text" value="" id="enroll">
					</div>
				</div>
			<div class="form-group">
				<label id="y" for="start" class="col-2 col-form-label">Date From:</label>
				<div class="col-10">
					<input class="form-control" type="date" value="" id="start">
				</div>
			</div>
			<div class="form-group">
				<label for="end" id="z" class="col-2 col-form-label">Date to:</label>
				<div class="col-10">
					<input class="form-control" type="date" value="" id="end">
				</div>
			</div>
			<div class="form-group">
				<button  value="submit" style="color:white;" id="allattend"  class="btn btn-success float-center">submit</button>
			</div>
			</div><br><br>
		<div class="text-center">
	
	<h1 id="matter" style="color:black;margin-top:250px;font-family:Segoe Script;"><p><b><i>  "It Is So Important To Understand Your Good Attendance Ups Yours Chance of Graduating"</i></b></p><h1>
		
		</div>
		<div>
			<b><h1 style="color:black;" id="name"></h1></b>
			<h2 id="dept"></h2>
			<h3 id="course"></h3>
			<h4 id="semester"></h4>
		</div>
		<table  id="tab" class="table table-dark" >
			<thead>
				<tr>
					<th>Lecture Present</th>
					<th>Lecture Absent</th>
					<th> Total Class</th>
				</tr>
			</thead>
			<tbody id="number">
			</tbody>
		</table><br>
		<h3 id="a">Attendance Details</h3>
		<table  id="tab" class="table table-hover" >
			<thead class="thead-dark">
				<tr>
					<th> Subject Name</th>
					<th> Attendance</th>
					<th> Date</th>
		
				</tr>
			</thead>
			<tbody id="showstatus">
			</tbody>
		</table><br>
		<div class="text-center">
			<h3 id="avg">  Average Attendance</h3>
			<h2 id="average"></h2> 
		</div>
		<div class="p-3 mb-2 bg-success text-black answer" >
		<div class="text-center">
		<h1 id="answer"><h1>
		</div>
		</div>
		</form>
		<div class="text-center">
		<button  type="button" id="print" style="color:white;"  class="btn btn-primary float-center" onclick=" $('#print').hide();window.print();$('#check,#print').slideDown('slow');">print</button>
		<button  value="submit" style="color:white;" id="check"  class="btn btn-primary float-center"><a href="#top">check another</a></button>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('#tab,#avg,#a,.answer').hide();
	$('#check').hide();
	$('#enroll').change(function(){
	var enroll = $('#enroll').val();
	if(enroll != '')
	{
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('/web/std_data');?>",
			dataType: 'json',
			data: 
			{
				enroll:enroll
			},
			success: function(res) 
			{
				var hey= '';
				var i;
				for(i=0;i< res.length;i++)
				{
					hey +='<tr>'+
					'<td>'+res[i].student_name+'</td>'+
					'</tr>';
				}
					$('#name').html(hey);
				var hey= '';
				var i;
				for(i=0;i< res.length;i++)
				{
					hey +='<tr>'+
					'<td>'+res[i].dept_name+'</td>'+
					'</tr>';
				}
					$('#dept').html(hey);
				var hey= '';
				var i;
				for(i=0;i< res.length;i++)
				{
					hey +='<tr>'+
					'<td>'+res[i].course_name+'</td>'+
					'</tr>';
				}
					$('#course').html(hey);
				var hey= '';
				var i;
				for(i=0;i< res.length;i++)
				{
					hey +='<tr>'+
					'<td>'+res[i].semester_name+'</td>'+
					'</tr>';
				}
					$('#semester').html(hey);	
					$('#name,#dept,#course,#semester').hide();
			}
		});
	}
	return false;
	});
	$('#allattend').on('click',function(){
	var enroll = $('#enroll').val();
	var start = $('#start').val();
	var end = $('#end').val();
	if( enroll !='' && start !='' && end !='')
	{
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('/web/all_attend');?>",
			dataType: 'json',
			data: 
			{
			enroll:enroll,
			start: start, 
			end:end
			},
			success: function(res) 
			{
				if(res != '')
				{
				var hey= '';
				var i;
				for(i=0;i< res.length;i++)
				{
					hey +='<tr>'+
					'<td>'+res[i].subject_name+'</td>'+
					'<td>'+res[i].status+'</td>'+
					'<td>'+res[i].date+'</td>'+
					'</tr>';
				}
					$('#showstatus').html(hey);
				var hey= '';
				var i;
				var x= '';
				var l;
				var a=0;
				var p=0;
				var t=0;
				for(i=0;i< res.length;i++)
				{
					t++
					if( res[i].status == 'present')
					{
						p++
					}
					else
					{
						a++
					}
				}
				l= p/t*100
				 x+='<tr>'+
				'<td>'+(p)+'</td>'+
				'<td>'+(a)+'</td>'+
				'<td>'+(t)+'</td>'+
				'</tr>';
				$('#number').html(x);
				$('#average').html(l);
				$('#allattend,#enroll,#z').hide();
				$('#start,#x').hide();
				$('#end,#y').hide();
				$('#matter').hide();
				$('#tab,#avg,#a,.answer').slideDown('slow');
				$('#name,#dept,#course,#semester').slideDown('slow');
				var ans;
				if(l >= 75 )
				{
					ans = 'Excellent..<i class="fas fa-smile"></i>'
				}
				else{
				ans = 'Improve your attendance..<i class="fas fa-frown"></i>'
				}
				$('#answer').html(ans);
				$('.answer').delay(5000).fadeOut();
				}
				else
				{
					alert('enrollment not exist');
				}
			}
		});
	}
	else
	{
		alert('fill all field first');
	}
	return false;
	});
	$('#check').on('click',function(){
		$("#pages").load('http://localhost/ams/index.php/web/view_attend');
		return false;
	});
});
</script>
