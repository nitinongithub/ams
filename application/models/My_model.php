<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model{
	function checklogin()
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
	function feedback()
	{
		$this->db->select('a.feedback_id,a.parent_name,a.feedback');
		$this->db->from('feedback a');
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
		return false;
		}
	}
	function get_menu()
	{
		$this->db->where('c.STATUS',$this->session->userdata('sts_'));
		$this->db->select('a.item,a.path');
		$this->db->from('menu a');
		$this->db->join('user_menu b','b.menu_id = a.menu_id','left');
		$this->db->join('user_status c','c.STID = b.STID','left');
		$query=$this->db->get();
	return $query->result();
	}
	
	
	function insert_session($data)
	{
		if($this->db->insert('session',$data))
		{
		return 1;	
		}
		else
		{
		return 0;	
		}
    }
	
	
	
	
	function department()
	{
		$this->db->select('a.dept_id,a.dept_name');
		$this->db->from('department a');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$r = $query->row();
			$this->session->set_userdata('dept_', $r->dept_id);
			return $query->result();
		}
		else{
		return false;
		}
	}
	function course()
	{
		$this->db->where('dept_id',$this->session->userdata('dept_'));
		$this->db->select('a.course_id');
		$this->db->from('course a');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$r = $query->row();
			$this->session->set_userdata('cor_', $r->course_id);
			return $query->result();
		}
		else{
		return false;
		}
	}
	function semester()
	{
		$this->db->select('a.semester_id');
		$this->db->from('semester a');
		$query = $this->db->get();
		return $query->result();
	}
	function subjectadd()
	{
		$this->db->select('a.subject_code');
		$this->db->from('subject a');
		$query = $this->db->get();
		return $query->result();
	}
	function add_faculty()
	{
		$data1 = array(
		'username'=> $this->input->post('username'),
		'password' => $this->input->post('password'),
		'STID' => 3,
		'sess_id' => 2020
		);
		$data2 = array(
		'faculty_id' => $this->input->post('fac_id'),
		'faculty_name'=> $this->input->post('fac_name'),
		'contact' => $this->input->post('contact'),
		'email'=>  $this->input->post('fac_email'),
		'dept_id' => $this->input->post('dept'),
		'sess_id' => 2020,
		'username'=> $this->input->post('username')
		);
		
		$this->db->insert('login', $data1);
		$this->db->insert('faculty', $data2);
		return true;
	}
	function add_subfaculty()
	{
		$data3 = array(
		'faculty_id'=> $this->input->post('fac_id'),
		'subject_code' => $this->input->post('subject'),
		'course_id'=> $this->input->post('course'),
		'class' => $this->input->post('class') 
		);
		$this->db->insert('subfaculty', $data3);
		return true;
	}
	function add_student()
	{
		$data1 = array(
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password'),
		'STID' => 4,
		'sess_id' => 2020
		);
		$data2 = array(
		'enrollment_no'=> $this->input->post('enroll'),
		'student_name' => $this->input->post('std_name'),
		'roll_no'=> $this->input->post('roll_no'),
		'email' => $this->input->post('std_email'),
		'contact' => $this->input->post('contact'),
		'username' => $this->input->post('username'),
		'dept_id' => $this->input->post('dept'),
		'course_id' => $this->input->post('course'),
		'semester_id' => $this->input->post('semester'),
		'sess_id' => 2020
		);
		$this->db->insert('login', $data1);
		$this->db->insert('student', $data2);
		return true;
	}
	
	
	function add_parent($u,$p,$par,$e,$c,$r)
	{

		$data3 = array(
		'username' => $u,
		'password' => $p,
		'STID' => 2,
		'sess_id' => 2020
		);
		$this->db->insert('login',$data3);
		$data4 = array(
		'parent_id'=> 20,
		'username' => $u,
		'parent_name' => $par,
		'email' => $e,
		'contact' => $c,
		'relation' => $r,
		'sess_id' => 2020
		);
		$this->db->insert('parent',$data4);
		return 1;
		
	}
	
	
	
	function add_subject($data)
	{
	
		if($this->db->insert('subject', $data))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	
	
	function give_feedback($data)
	{
		if($this->db->insert('feedback', $data))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	
	
	
	function view_profiles()
	{
		$this->db->where('username', $this->session->userdata('usr_') );
		$this->db->select('a.enrollment_no,a.roll_no,b.course_name,d.semester_id,d.semester_name,a.student_name, a.email, a.contact,c.dept_name');
		$this->db->from('student a');
		$this->db->join('course b','b.course_id = a.course_id');
		$this->db->join('department c','c.dept_id = a.dept_id');
		$this->db->join('semester d','d.semester_id = a.semester_id');
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$r = $query->row();
			$this->session->set_userdata('sem_', $r->semester_id);
			return $query->result();
		}
		else{
			return false;
		}
	}
	function stdsubdata()
	{
		$this->db->where('semester_id', $this->session->userdata('sem_'));
		$this->db->select('a.subject_name');
		$this->db->from('subject a');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	function view_profilefac()
	{
		$this->db->where('username', $this->session->userdata('usr_'));
		$this->db->select('a.faculty_id,a.faculty_name,a.contact,a.email,b.dept_name');
		$this->db->from('faculty a');
		$this->db->join('department b','b.dept_id = a.dept_id');
		$query = $this->db->get();
		return $query->result();
	}
	function view_profilefac1()
	{
		$this->db->where('username', $this->session->userdata('usr_'));
		$this->db->select('c.subject_name, d.course_name, b.class');
		$this->db->from('faculty a');
		$this->db->join('subfaculty b','b.faculty_id = a.faculty_id');
		$this->db->join('subject c','c.subject_code = b.subject_code');
		$this->db->join('course d','d.course_id = b.course_id');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	function view_profile()
	{
		$this->db->where('username', $this->session->userdata('usr_') );
		$this->db->select('a.parent_name, a.relation, a.email, a.contact');
		$this->db->from('parent a');
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
		return false;
		}
	}
	
	
	function mark_attendance()
	{
		$this->db->where('semester_id', $this->input->post('semester'));
		$this->db->select('a.roll_no,a.student_name,a.enrollment_no');
		$this->db->from('student a');
		$query = $this->db->get();
		return $query->result();
	}
	function subject()
	{
		$this->db->where('semester_id',$this->input->post('semester'));
		$this->db->select('a.subject_name');
		$this->db->from('subject a');
		$query = $this->db->get();
		return $query->result();
	}
	
	function coursedata($id1)
	{
		$this->db->where('dept_id',$id1);
		$this->db->select('a.course_id');
		$this->db->from('course a');
		$query = $this->db->get();
		return $query->result();
	}
	function coursemark()
	{
		$this->db->where('semester_id',$this->input->post('semester'));
		$this->db->select('b.course_id');
		$this->db->from('semester a');
		$this->db->join('course b','b.course_id = a.course_id');
		$query = $this->db->get();
		return $query->result();
	}
	function departmentdata($id)
	{
		$this->db->where('faculty_id',$id);
		$this->db->select('a.dept_id');
		$this->db->from('faculty a');
		$query = $this->db->get();
		return $query->result();
	}
	function semesterdata($id2)
	{
		$this->db->where('course_id',$id2);
		$this->db->select('a.semester_id');
		$this->db->from('semester a');
		$query = $this->db->get();
		return $query->result();
	}
	

}