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
	
	
	function add_faculty()
	{
		$a = $this->mm->add_faculty();
		if($a == true)
		{
		
			redirect('web/add_fac');
		}
		else
		{
		 redirect('web/add_fac');
		}
	}

	function add_sub()
	{
	$r['c']= $this->mm->semester();	
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
	
	
	function add_subfaculty()
	{
		$a = $this->mm->add_subfaculty();
		if($a == true)
		{
		
			redirect('web/add_fac');   
		}

	}
	
	function add_student()
	{
		$a = $this->mm->add_student();
		if($a == true)
		{
		redirect('web');
		}
		else
		{
		redirect('web/add_std');
		}
		
	}
	
	function add_par()
	{
		$this->load->view('add_par');
	}
	function add_parent()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$par = $this->input->post('parent');
		$e = $this->input->post('fac_email');
		$c = $this->input->post('contact');
		$r = $this->input->post('relation');
		$result=$this->mm->add_parent($u,$p,$par,$e,$c,$r);
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
	

	function add_fac()
	{
	$r['d']= $this->mm->subjectadd();
	$r['b']= $this->mm->course();
	$r['a']= $this->mm->department();
	$this->load->view('add_fac',$r);
	}
	
	function mark_attendance()
	{
		$id2 = $this->input->get('id');
		$id = $this->input->get('id');
		$r['f'] = $this->mm->departmentdata($id);
		$r['d'] = $this->mm->mark_attendance();
		$id1 = $this->input->get('id');
		$r['a'] = $this->mm->coursedata($id1);
		$r['g'] = $this->mm->coursemark();
		$r['b'] = $this->mm->view_Profilefac();
		$r['e'] = $this->mm->subject();
		$r['c'] = $this->mm->semesterdata($id2);
	$this->load->view('mark_attendance',$r);
	}
	
	function view_attend()
	{
	$this->load->view('view_attend');
	}
	function std_view_attend()
	{

	$this->load->view('std_view_attend');
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
	
	
	function index4()
	{
		$this->load->view('view_feedback');
	}
	function view_feedback()
	{
	$a = $this->mm->feedback();
	echo json_encode($a);
	}
	function feed_delete()
	{
	$this->mm->feed_delete();
	}
	
	
	
	
	
	function test()
	{
		$data['session'] = $this->mm->getsession();
		$data['user_status'] = $this->mm->getUsrStatus();
		$data['login_record'] = $this->mm->getLoginData();
		
		$this->load->view('test', $data);
	}
	
	
}

