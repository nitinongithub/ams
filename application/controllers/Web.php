<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//redirect('authenticate/uc');
		$this->load->model('my_model','mm');
		if(!$this->session->userdata('sts_')){ redirect('authenticate');}

	}
	
	
	function index1()
	{
		$this->load->view('view_profilepar');
	}
	function view_profile()
	{
		$r = $this->mm->view_profile();
		echo json_encode($r);
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
	
	
function index()
	{
		$id = $this->input->get('id');	
		$data['a']= $this->mm->stdsubdata($id);	
		$data['menu'] = $this->mm->get_menu();
		$this->load->view('home', $data);
	}
	
	function subjectadd()
	{
		$id = $this->input->post('course');
		$res = $this->mm->subjectadd($id);
		echo json_encode($res);
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
	function add_subfaculty()
	{
		$i = $this->input->post('id');
		$co = $this->input->post('course');
		$s = $this->input->post('subject');
		$c = $this->input->post('cls');
		$result=$this->mm->add_subfaculty($i,$co,$s,$c);
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
	$r['c']= $this->mm->semestersub();	
	$this->load->view('add_sub',$r);
	}
	function add_subject()
	{
		$data = array(
		'subject_code' => $this->input->post('subject'),
		'subject_name' => $this->input->post('subject'),
		'semester_id' => $this->input->post('semester')
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
		$result=$this->mm->add_parent($up,$p,$par,$e,$c,$r);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
		
	}
	
	
	
	function contact(){
	$this->load->view('contact');
	}
	

	
	function view_attend()
	{
	$r['a'] = $this->mm->student();
	$this->load->view('view_attend',$r);
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
	function view_profiles()
	{	
	$r = $this->mm->view_profiles();
	echo json_encode($r);
	}
	function view_stdsubdata()
	{
		$r = $this->mm->stdsubdata();
		echo json_encode($r);
	}


	function about()
	{
		$this->load->view('about');
	}
	
	function feedback()
	{
		
	$this->load->view('give_feedback');
	}
	function give_feedback()
	{
	$data = array(
		'parent_name'=> $this->input->post('parent'),
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
	
	
	
	function generate_report()
	{
	$this->load->view('generate_report');
	}
	
	
	
	
	function mark_attendance()
	{
		$r['a'] = $this->mm->choosefac();
		$this->load->view('mark_attendance',$r);
	}
	function send_id()
	{
	$id = $this->input->post('faculty_id');
	$res = $this->mm->send_id($id);
		echo json_encode($res);
	}
	function sendsub()
	{
	$id = $this->input->post('subject');
	$res = $this->mm->send_sem($id);
		echo json_encode($res);
	}
	function take_student()
	{
	$id = $this->input->post('semester');
	$res = $this->mm->take_std($id);
		echo json_encode($res);
	}
	function insert_data()
	{
		$a = $this->input->post('faculty_id');
		$b = $this->input->post('course');
		$c = $this->input->post('subject');
		$d = $this->input->post('date');
		$e = $this->input->post('semester');
		$data = $this->input->post('student');
		if($data>=0 && $d != 0)
		{
		$x = $this->mm->insert_data($a,$b,$c,$d,$data,$e);
		echo "<script> window.location.href='';
		alert('attendance added successfully..');</script>";
		}
		else
		{
			
		redirect('web');
		}
	}
	
	
	function std_view_attend()
	{
	
	$this->load->view('std_view_attend');
	}
	
	
}

