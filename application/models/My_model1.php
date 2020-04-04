<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model1 extends CI_Model{
	function __construct() 
	{
	parent::__construct();
	}
	function form_insert($data)
	{
		$this->db->insert('employee', $data);
	}
}
?>