<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class feedcntl extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//redirect('authenticate/uc');
		$this->load->model('my_model','mm');

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
}
?>