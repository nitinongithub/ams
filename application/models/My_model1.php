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
	function login()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$this->db->select('a.username, b.STATUS, b.pic');
		$this->db->from('login a');
		$this->db->join('user_status b', 'b.STID = a.STID');
		$this->db->join('session c', 'c.sess_id = a.sess_id');
		$query = $this->db->get();
		
		if($query->num_rows() != 0){
			$r = $query->row();
			$this->session->set_userdata('usr_', $r->username);
			$this->session->set_userdata('sts_', $r->STATUS);
			$this->session->set_userdata('pic_', $r->pic);
		
			$bool_ = true;
		} else {
			$bool_ = false;
		}
	return $bool_;
	}
}
?>