<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model{
	
	
	function checklogin()
	{
		$this->db->where('sess_id',2020);
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$this->db->select('a.username, b.STATUS, b.pic');
		$this->db->from('login a');
		$this->db->join('user_status b', 'b.STID = a.STID');
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
	
	
	function ch_password($u,$p)
	{
		$this->db->select('a.username');
		$this->db->from('login a');
		$query = $this->db->get();
		foreach( $query->result() as $x)
		{
		if($u == $x->username)
		{
				$data= array(
				'password' => $p
			);
				$this->db->where('username',$u);
				$this->db->update('login',$data);
				return 1;
		}
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
	
	
	
	
	
	
	
	function add_student($us,$p,$std,$en,$r,$c,$em,$de,$co,$sem)
	{
		$this->db->select('a.username');
		$this->db->from('login a ');
		$query = $this->db->get();
		$m = $query->row();
		if($us != $m->username)
		{
		$data1 = array(
		'username' => $us,
		'password' => $p,
		'STID' => 4,
		'sess_id' => 2020
		);
		$data2 = array(
		'enrollment_no'=> $en,
		'student_name' => $std,
		'roll_no'=> $r,
		'email' => $em,
		'contact' => $c,
		'username' => $us,
		'dept_id' => $de,
		'course_id' => $co,
		'semester_id' => $sem,
		'sess_id' => 2020
		);
		$this->db->insert('login', $data1);
		$this->db->insert('student', $data2);
		return 1;
		}
		else
		{
			return 0;
		}
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
	
	
	function semestersub($a)
	{
		$this->db->where('course_id',$a);
		$this->db->select('a.semester_id');
		$this->db->from('semester a');
		$query = $this->db->get();
		return $query->result();
	}
	
	
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
	function add_sufaculty($i,$co,$s,$c)
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
	
	
	function checkusr()
	{
		$this->db->select('a.username');
		$this->db->from('login a');
		$query = $this->db->get();
		return $query->result();
	}
	function add_parent($up,$p,$par,$e,$c,$r, $en)
	{
		$this->db->select('a.username');
		$this->db->from('login a');
		$query = $this->db->get();
		$n = $query->row();
		if( $up != $n->username)
		{
		$data3 = array(
		'username' => $up,
		'password' => $p,
		'STID' => 2,
		'sess_id' => 2020
		);
		$this->db->insert('login',$data3);
		$data4 = array(
		'username' => $up,
		'parent_name' => $par,
		'email' => $e,
		'contact' => $c,
		'relation' => $r,
		'enrollment_no'=> $en,
		'sess_id' => 2020
		);
		$this->db->insert('parent',$data4);
		return 1;
		}
		else
		{
			return 0;
		}
	
	}
	function delete_par($upar)
	{
		$this->db->where('sess_id',2020);
		$this->db->where('STID',2);
		$this->db->select('a.username');
		$this->db->from('login a');
		$query = $this->db->get();
		foreach($query->result() as $i)
		{
		if( $upar == $i->username )
		{
			$this->db->where('username',$upar);
			$this->db->delete('parent');
			$this->db->where('username',$upar);
			$this->db->delete('login');	
			return 1;
		}
		}
	}
	
	function getname()
	{
		$this->db->where('sess_id',2020);
		$this->db->where('username',$this->session->userdata('usr_'));
		$this->db->select('a.student_name');
		$this->db->from('student a');
		$query= $this->db->get();
		return $query->result();
	}
	function std_attend ($a,$st,$en)
	{
		$this->db->select('a.enrollment_no');
		$this->db->from('student a');
		$query = $this->db->get();
		 foreach($query->result() as $r)
		 {
			 if($a == $r->enrollment_no)
			 {
		$this->db->where('sess_id',2020);
		$this->db->where('enrollment_no',$a);
		$this->db->where('date >=',$st);
		$this->db->where('date <=',$en);
		$this->db->select('c.subject_name,a.status,a.date');
		$this->db->from('attendance a');
		$this->db->join('subject c','c.subject_code = a.subject_code');
		$query1= $this->db->get();
		return $query1->result();
			 }
		}
	}
	function get_data($a)
	{
		$this->db->where('sess_id',2020);
		$this->db->where('enrollment_no',$a);
		$this->db->select('a.student_name,b.course_name,d.semester_name,c.dept_name');
		$this->db->from('student a');
		$this->db->join('course b','b.course_id = a.course_id');
		$this->db->join('department c','c.dept_id = a.dept_id');
		$this->db->join('semester d','d.semester_id = a.semester_id');
		$query= $this->db->get();
		return $query->result();
	}
	
	
	
	function feedback()
	{
		$this->db->where('sess_id',2020);
		$this->db->select('a.feedback_id,a.name,a.feedback');
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
	function deletefeed($id)
	{
		$this->db->where('sess_id',2020);
		$this->db->where('feedback_id',$id);
		$this->db->delete('feedback');
		return 1;
	}
	
	
	
	function course($id)
	{ 
		
		$this->db->where('dept_id',$id);
		$this->db->select('a.course_id');
		$this->db->from('course a');
		$query = $this->db->get();
		return $query->result();
	}
	function semester($id)
	{
		$this->db->where('course_id',$id);
		$this->db->select('a.semester_id');
		$this->db->from('semester a');
		$query = $this->db->get();
		return $query->result();
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
		$this->db->where('sess_id',2020);
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
		$this->db->where('sess_id',2020);
		$this->db->where('username', $this->session->userdata('usr_'));
		$this->db->select('a.faculty_id,a.faculty_name,a.contact,a.email,b.dept_name');
		$this->db->from('faculty a');
		$this->db->join('department b','b.dept_id = a.dept_id');
		$query = $this->db->get();
		return $query->result();
	}
	function view_profilefac1()
	{
		$this->db->where('sess_id',2020);
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
		$this->db->where('sess_id',2020);
		$this->db->where('username', $this->session->userdata('usr_'));
		$this->db->select('a.parent_name,a.parent_id, a.relation, a.email, a.contact');
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
	function childparent($a)
	{
		
		$this->db->where('parent_id',$a);
		$this->db->select('b.student_name');
		$this->db->from('parent a');
		$this->db->join('student b','b.enrollment_no= a.enrollment_no');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	function choosefac()
	{
		$this->db->where('sess_id',2020);
		$this->db->where('username',$this->session->userdata('usr_'));
		$this->db->select('a.faculty_id');
		$this->db->from('faculty a');
		$query = $this->db->get();
		return $query->result();
	}
	function send_id($id)
	{
		$this->db->where('faculty_id',$id);
		$this->db->select('a.course_id,a.subject_code');
		$this->db->from('subfaculty a');
		$query= $this->db->get();
		return $query->result();
	}
	function send_sem($id)
	{
		$this->db->where('subject_code',$id);
		$this->db->select('a.semester_id');
		$this->db->from('subject a');
		$query= $this->db->get();
		return $query->result();
	}
	function take_std($id)
	{
		$this->db->where('semester_id',$id);
		$this->db->select('a.roll_no,a.student_name,a.enrollment_no');
		$this->db->from('student a');
		$query= $this->db->get();
		return $query->result();
	}
	function student()
	{
		$this->db->where('sess_id',2020);
		$this->db->where('semester_id','sembca1');
		$this->db->select('a.roll_no,a.student_name,a.enrollment_no');
		$this->db->from('student a');
		$query= $this->db->get();
		return $query->result();
	}
	
	
	function insert_data($a,$b,$c,$d,$data,$e)
	{
		$this->db->where('semester_id',$e);
		$this->db->select('a.enrollment_no');
		$this->db->from('student a');
		$query= $this->db->get();
		if($data>=0)
		{	
			
		foreach ($query->result() as $r)
			{
				$data1 = array(
			'enrollment_no' => $r->enrollment_no,
			'status'=> 'absent',
			'sess_id'=>2020,
			'course_id'=>$b,
			'subject_code'=>$c,
			'date'=>$d,
			'faculty_id'=>$a
			);
			$this->db->insert('attendance',$data1);
			}
		}
			
		if($data>0)
		{
			
			for($i=0;$i<count($data);$i++)
			{
				$data2= array
				(
				'status'=> 'present'	
				);
				$this->db->where('course_id',$b);
				$this->db->where('subject_code',$c);
				$this->db->where('date',$d);
				$this->db->where('enrollment_no',$data[$i]);
				$this->db->update('attendance',$data2);
		
			}
		}
	
	return 1;	
					
	}
	
	function student_attend($st,$en)
	{
		$this->db->where('sess_id',2020);
		$this->db->where('username',$this->session->userdata('usr_'));
		$this->db->select('a.enrollment_no');
		$this->db->from('student a');
		$query= $this->db->get();
		$r = $query->row();
		$this->db->where('enrollment_no',$r->enrollment_no);
		$this->db->where('date >=',$st);
		$this->db->where('date <=',$en);
		$this->db->select('c.subject_name,a.status,a.date');
		$this->db->from('attendance a');
		$this->db->join('subject c','c.subject_code = a.subject_code');
		$this->db->order_by('subject_name' ,'asc');
		$query1= $this->db->get();
		return $query1->result();
	
	}
	
	function subjectadd($id)
	{
		$this->db->where('course_id',$id);
		$this->db->select('a.subject_code');
		$this->db->from('subject a');
		$query = $this->db->get();
		return $query->result();
	}
	function update_attend($a,$b,$c,$d,$abs,$pre,$e)
	{
		if($pre>=0)
		{
			for($i=0;$i<count($pre);$i++)
			{
				$this->db->where('sess_id',2020);
				$this->db->where('enrollment_no',$pre[$i]);
				$this->db->where('subject_code',$c);
				$this->db->where('date',$d);
				$this->db->select('a.attend_id');
				$this->db->from('attendance a');
				$query= $this->db->get();
				foreach($query->result() as $k)
				{
					$data2= array
					(
					'status'=> 'present'	
					);
				$this->db->where('attend_id',$k->attend_id);
				$this->db->update('attendance',$data2);
				}
			}
		}
		if($abs>=0)
		{
			for($i=0;$i<count($abs);$i++)
			{
				$this->db->where('sess_id',2020);
				$this->db->where('enrollment_no',$abs[$i]);
				$this->db->where('subject_code',$c);
				$this->db->where('date',$d);
				$this->db->select('a.attend_id');
				$this->db->from('attendance a');
				$query1= $this->db->get();
				foreach($query1->result() as $j)
				{
					$data1= array
					(
					'status'=> 'absent'	
					);
					$this->db->where('attend_id',$j->attend_id);
					$this->db->update('attendance',$data1);
				}
			}
		}
		return 1;
	
	}
	
	
	
	
	
}