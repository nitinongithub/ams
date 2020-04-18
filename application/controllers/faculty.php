<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faculty extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('my_model','mm');
		

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
	