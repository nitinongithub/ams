<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class feedcntl extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//redirect('authenticate/uc');
		$this->load->model('my_model','mm');

	}

?>