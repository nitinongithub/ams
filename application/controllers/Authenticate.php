<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {
	function __construct(){
		parent::__construct();
		
		$this->load->model('my_model','mm');
	}
	function index(){
		redirect('authenticate/login');
	}
	function login()
	{
		//$this->load->view('uc');
		$this->load->view('login');
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('authenticate/login');
	}
	
	function uc(){
		$this->load->view('uc');
	}
	
	function checklogin()
	{
		$r = $this->mm->checklogin();
		if($r == true)
		{
		redirect('web');
		} 
		else 
		{
			redirect('authenticate/login');
		}
		
	}
}
