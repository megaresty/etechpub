<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate(){
		//grab user input
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		
		//prep the query
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		
		//run the query
		$query = $this->db->get('users');
		//let's check if there are any results
		if($query->num_rows==1) {
			//if there is a user, then create session data
			$row = $query->row();
			$data = array(
					'idlogin' => $row->idlogin,
					'username' => $row->username,
					'password' => $row->password,
					'validate' => true
					);
			$this->session->set_userdata($data);
			return true;
		}
		
		//if the previous process didn't validate
		//then return false
		return false;
	}
}
?>