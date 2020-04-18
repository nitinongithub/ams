<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_faculty extends CI_Model{
	function department()
	{
		$this->db->select('a.dept_id,a.dept_name');
		$this->db->from('department a');
		$query = $this->db->get();
		return $query->result();
	}
	function coursefac()
	{ 
		$this->db->select('a.course_id');
		$this->db->from('course a');
		$query = $this->db->get();
		return $query->result();
	}
	function delete_fac($id,$name)
	{
		$this->db->where('STID',3);
		$this->db->select('a.username');
		$this->db->from('login a');
		$query = $this->db->get();
		foreach($query->result() as $i)
		{
		if( $name == $i->username )
		{
			$this->db->where('faculty_id',$id);
			$this->db->delete('subfaculty');
			$this->db->where('username',$name);
			$this->db->delete('faculty');
			$this->db->where('username',$name);
			$this->db->delete('login');			
			return 1;
		}
		}
	}
	function add_faculty($u,$p,$id,$e,$n,$co,$de)
	{
		$this->db->select('a.username');
		$this->db->from('login a');
		$query = $this->db->get();
		$r = $query->row();
		if( $u != $r->username)
		{
		$data1 = array(
		'username'=> $u,
		'password' => $p,
		'STID' => 3,
		'sess_id' => 2020
		);
		$data2 = array(
		'faculty_id' => $id,
		'faculty_name'=> $n,
		'contact' => $co,
		'email'=>  $e,
		'dept_id' => $de,
		'sess_id' => 2020,
		'username'=> $u
		);
		$this->db->insert('login', $data1);
		$this->db->insert('faculty', $data2);
		return 1;
		}
		else{
		return 0;
		}
	}
	function add_subfaculty($i,$co,$s,$c)
	{
		$data3 = array(
		'faculty_id'=> $i,
		'subject_code' => $s,
		'course_id'=> $co,
		'class' => $c 
		);
		$this->db->insert('subfaculty', $data3);
		return true;
	}
	function subjectadd($id)
	{
		$this->db->where('course_id',$id);
		$this->db->select('a.subject_code');
		$this->db->from('subject a');
		$query = $this->db->get();
		return $query->result();
	}

	
}
?>