<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web1 extends CI_Controller 
 {
	
	function __construct()
	{
		parent::__construct();
	$this->load->model('my_model1','mm');
	$this->load->model('my_model','mb');
	}
	
	function mains()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('dname', 'name', 'required|min_length[5]|max_length[15]');
		if ($this->form_validation->run() == TRUE) 
		{
			$data = array(
		'Student_Name' => $this->input->post('dname')
		);
		$this->mm->form_insert($data);
		echo "<script>alert('Form Submitted Successfully....!!!! ');</script>";
		$this->load->view('form');
		
		}
		else 
		{
		echo "<script>alert('error....!!!! ');</script>";
			$this->load->view('form');
		}
	}
	function mains1()
	{
		$this->load->helper('form');
		
		$r = $this->mm->login();
		if($r == true)
		{
			echo "<script>alert('login Successfully....!!!! ');</script>";
		redirect('web1/mains1');
		} 
		
	$this->load->view('front');	
	}
}
?>