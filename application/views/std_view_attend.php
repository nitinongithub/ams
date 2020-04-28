<style>
		.std1{
		height:auto;
		background-color:white;
		margin-top:0px;
		}
		.std{
		height:auto;
		background-color:#900C3F  ;
		}
		.img-fluid{
		width:10%;
		height:10%;
		}
		 h2{
		color:red;
		}
		h2:hover
		{
		font-weight:bold;
		}
		#x{
	font-size:20px;
	}
	#y{
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
					<img src="<?php echo base_url();?>images/amrapali1.png" class="img-fluid" alt="Responsive image">
				<div class="header">
					<h2 style="font-weight:bold;text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0,0,0,0.15);">Amrapali Group Of Institutes</h2>
					<h4>Shiksha Nagar,Haldwani</h4><br>
					<?php foreach($a as $i ){?>
					<h2 style="color:#900C3F;"> <?php echo $i->student_name;?></h2></br>
					<?php } ?>
				</div>
			</div>
			<form id="viewatd" name="viewatd" method="post" type="form">
			<div class="container item">
		
			<div class="form-group">
				<label id="x" for="start" class="col-2 col-form-label">Date From:</label>
				<div class="col-10">
					<input class="form-control" type="date" value="" id="start">
				</div>
			</div>
			<div class="form-group">
			<label for="end" id="y" class="col-2 col-form-label">Date to:</label>
			<div class="col-10">
				<input class="form-control" type="date" value="" id="end">
			</div>
			</div>
			<div class="form-group">
			<div class="col-10">
				<button  value="submit" style="color:white;" id="student"  class="btn btn-success float-left">submit</button>
			</div>
			</div>
			</div>
		<div class="text-center">
		<h1 id="matter" style="color:black;margin-top:250px;font-family:Segoe Script;"><p><b><i>  "It Is So Important To Understand Your Good Attendance Ups Yours Chance of Graduating"</i></b></p><h1>
		</div>
			<table  id="tab" class="table table-dark" >
			<thead>
				<tr>
					<th>Lecture Present</th>
					<th>Lecture Absent</th>
					<th> Total classes</th>
				</tr>
			</thead>
			<tbody id="number">
			</tbody>
		</table><br>
		<h3 id="a">Attendance Details</h3>
		<table  id="tabl" class="table table-hover" >
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
		<div class="p-3 mb-2 bg-success text-black answer" >
		<div class="text-center">
		<h1 id="answer"><h1>
		</div>
		</div>
		<button  type="button" id="print" style="color:white;"  class="btn btn-primary float-center" onclick=" $('#print').hide();window.print();$('#print').slideDown('slow');">print</button>
		</div>
		
	</form>
	</div>
	</div>
	
	<script>
	$(document).ready(function(){
	$('#tab,#tabl,#avg,#average,#a,.answer').hide();
	$('#student').on('click',function(){
	var start = $('#start').val();
	var end = $('#end').val();
	$('#student').hide();
	$('#start,#x').hide();
	$('#end,#y').hide();
	
	if(start !=0 && end != 0)
	{
		$.ajax({
				type: "POST",
				url: "<?php echo site_url('/web/student_attend');?>",
				dataType: 'json',
				data: 
				{start: start, 
				end:end
				},
				success: function(res) 
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
				$('#tab,#tabl,#avg,#average,#a,.answer').slideDown('slow');
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
		});
	}
	return false;
	});
	});
	</script>