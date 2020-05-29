<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//redirect('authenticate/uc');
		$this->load->model('my_model','mm');
		

	}
	
	function change_password()
	{
		$u = $this->input->post('user');
		$p = $this->input->post('pass');
		$r = $this->mm->ch_password($u,$p);
		if($r)
		{
			echo 1;
		}
		else
		{
		echo 0;
		}
	}
	
	
	function index()
	{
		$this->load->view('header');
		$id = $this->input->get('id');	
		$data['a']= $this->mm->stdsubdata($id);	
		$data['menu'] = $this->mm->get_menu();
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
	
	
	function manage_session()
	{
		$this->load->view('manage_session');
	}
	function insert_session()
	{
		$data = array(
	'sess_id' => $this->input->post('sess_id'),
	'start_date'=>$this->input->post('start'),
	'end_date'=>$this->input->post('end'),
	'session_created'=>$this->input->post('start')
	);
		
		$result=$this->mm->insert_session($data);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
    }
	
	
	
	
	function addstudent()
	{		
	$r['a']= $this->mm->department();
	$this->load->view('student',$r);
	}
	function semester()
	{
		$id = $this->input->post('course');
		$res = $this->mm->semester($id);
		echo json_encode($res);
	}
	function course()
	{
		$id = $this->input->post('department');
		$res = $this->mm->course($id);
		echo json_encode($res);
	}
	function add_student()
	{
		$us = $this->input->post('usrname');
		$p = $this->input->post('password');
		$std = $this->input->post('name');
		$en = $this->input->post('enroll');
		$r = $this->input->post('rollno');
		$c = $this->input->post('contact');
		$em = $this->input->post('email');
		$de = $this->input->post('department');
		$co = $this->input->post('course');
		$sem = $this->input->post('semester');
		$result = $this->mm->add_student($us,$p,$std,$en,$r,$c,$em,$de,$co,$sem);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
	}
	
	
	
	function add_sub()
	{
		$r['b']= $this->mm->coursefac();	
		$this->load->view('add_sub',$r);
	}
	function subjectsem()
	{
		$a = $this->input->post('course');
		$res=$this->mm->semestersub($a);
		echo json_encode($res);
	}
	function add_subject()
	{
		$data = array(
		'subject_code' => $this->input->post('subject'),
		'subject_name' => $this->input->post('subject'),
		'semester_id' => $this->input->post('semester'),
		'course_id' => $this->input->post('course')
		);		
		$result=$this->mm->add_subject($data);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
	}
	
	
	function add_par()
	{
		$r['a'] = $this->mm->checkusr();
		$this->load->view('add_par',$r);
	}
	function add_parent()
	{
		
		$up = $this->input->post('username');
		$p = $this->input->post('password');
		$par = $this->input->post('parent');
		$e = $this->input->post('fac_email');
		$c = $this->input->post('contact');
		$r = $this->input->post('relation');
		$en = $this->input->post('par');
		$result=$this->mm->add_parent($up,$p,$par,$e,$c,$r, $en);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
		
	}
	function delete_parent()
	{
		$upar = $this->input->post('usernamepar');
		$res = $this->mm->delete_par($upar);
		if($res)
		{
			echo  1;	
		}
		else
		{
			echo 0;
		}
	}
	
	function view_attend()
	{
	$this->load->view('view_attend');
	}
	function all_attend()
	{
		$a = $this->input->post('enroll');
		$s = $this->input->post('start');
		$e = $this->input->post('end');
		$st = date("d-m-Y", strtotime($s));
		$en = date("d-m-Y", strtotime($e));
		$res = $this->mm->std_attend($a,$st,$en);
		if($res != '')
		{
		echo json_encode($res);
		}
		else
		{
			echo 0;
		}
	}
	
	
	function index1()
	{
		$this->load->view('view_profilepar');
	}
	function view_profiles()
	{	
	$r = $this->mm->view_profile();
	echo json_encode($r);
	}
	function childpar()
	{
	$a = $this->input->post('id');
	$res = $this->mm->childparent($a);
	echo json_encode($res);
	}
	
	
	function index3()
	{
		$this->load->view('view_profilefac');
	}
	function view_profilefac()
	{
	$r = $this->mm->view_profilefac();
	echo json_encode($r);
	}
	function view_profilefac1()
	{
	$r = $this->mm->view_profilefac1();
	echo json_encode($r);
	}
	
	
	function index2()
	{
	$this->load->view('view_profilestd');
	}
	function view_profilestd()
	{	
	$r = $this->mm->view_profiles();
	echo json_encode($r);
	}
	
	function view_stdsubdata()
	{
		$r = $this->mm->stdsubdata();
		echo json_encode($r);
	}
	
	
	
	function add_fac()
	{
		$r['d']= $this->mm->coursefac();
		$r['a']= $this->mm->department();
		$this->load->view('add_fac',$r);
	}
	function add_faculty()
	{
		$u = $this->input->post('uername');
		$p = $this->input->post('password');
		$id = $this->input->post('fac_id');
		$e = $this->input->post('email');
		$n = $this->input->post('name');
		$co = $this->input->post('contact');
		$de = $this->input->post('dept');
		$result=$this->mm->add_faculty($u,$p,$id,$e,$n,$co,$de);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
	}
	function subjectadd()
	{
		$id = $this->input->post('course');
		$res = $this->mm->subjectadd($id);
		echo json_encode($res);
	}
	function add_subfaculty()
	{
		$i = $this->input->post('id');
		$co = $this->input->post('course');
		$s = $this->input->post('subjectfac');
		$c = $this->input->post('cls');
		$result=$this->mm->add_sufaculty($i,$co,$s,$c);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
	}	
	function delete_faculty()
	{
		$id = $this->input->post('facid');
		$name = $this->input->post('usernamefac');
		$res = $this->mm->delete_fac($id,$name);
		if($res)
		{
			echo  1;	
		}
		else
		{
			echo 0;
		}
	}
	
	function contact()
	{
		$this->load->view('contact');
	}
	
		
		
	function feedback()
	{
		
	$this->load->view('give_feedback');
	}
	function give_feedback()
	{
	$data = array(
		'name'=> $this->input->post('name'),
		'feedback'=> $this->input->post('feedback'),
		'sess_id'=> 2020
		);
		$result=$this->mm->give_feedback($data);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
	}
	function index4()
	{
		$this->load->view('view_feedback');
	}
	function view_feedback()
	{
	$a = $this->mm->feedback();
	echo json_encode($a);
	}
	function deletefeed()
	{
	$id = $this->input->post('id');
	$res = $this->mm->deletefeed($id);
		echo json_encode($res);
	}
	
	
	
	
	function std_view_attend()
	{
	$r['b']= $this->mm->stdsubdata();
	$r['a']= $this->mm->getname();
	$this->load->view('std_view_attend',$r);
	}
	function student_attend()
	{
		$s = $this->input->post('start');
		$e = $this->input->post('end');
		$st = date("d-m-Y", strtotime($s));
		$en = date("d-m-Y", strtotime($e));
		$res = $this->mm->student_attend($st,$en);
		echo json_encode($res);
	}
	
	function std_data()
	{
		$a = $this->input->post('enroll');
		$res = $this->mm->get_data($a);
		echo json_encode($res);
	}
	
	
function update_attend()
	{
		$r['a'] = $this->mm->choosefac();
		$this->load->view('update_attendance',$r);
	}
	function update_data()
	{
		$a = $this->input->post('faculty_id');
		$b = $this->input->post('course');
		$c = $this->input->post('subject');
		$d = $this->input->post('date');
		$e = $this->input->post('semester');
		$pre = $this->input->post('student');
		$abs = $this->input->post('students');	
		if($abs>'' && $pre>'' && $d != '')
		{
		$x = $this->mm->update_attend($a,$b,$c,$d,$pre,$abs,$e);
		echo "<script> window.location.href='';
		alert('attendance updated successfully..');</script>";
		}
		else
		{
			redirect('web');
		}
	}
function mark_attendance ()
	{
		$r['a'] = $this->mm->choosefac ();
		$this->load->view ('mark_attendance', $r);
	}
	function send_id ()
	{
	$id = $this->input->post('faculty_id');
	$res = $this->mm->send_id($id);
		echo json_encode($res);
	}
	function sendsub ()
	{
	$id = $this->input->post('subject');
	$res = $this->mm->send_sem ($id);
		echo json_encode($res);
	}
	function take_student ()
	{
	$id = $this->input->post('semester');
	$res = $this->mm->take_std($id);
		echo json_encode($res);
	}
	function insert_data ()
	{
		$a = $this->input->post('faculty_id');
		$b = $this->input->post('course');
		$c = $this->input->post('subject');
		$d = $this->input->post('date');
		$e = $this->input->post('semester');
		$data = $this->input->post('student');
		if($data>='' && $d!= '')
		{
		$x = $this->mm->insert_data ($a, $b, $c, $d, $data, $e);
		echo "<script> window. location. href='';
		alert ('attendance added successfully.'); </script>";
		}
		else
		{
			redirect('web');
		}
	}
	
}

