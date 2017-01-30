<?php
 
class Checklogin extends CI_Model {
 
    function __construct() {
        parent::__construct();
        $this->tbl = "login";
    }

    function check_user($username="", $password="") {
		$query = $this->db->get_where($this->tbl,array('username' => $username, 'password' => $password));
		$query = $query->result_array();
		return $query;
	}
	
	function get_user($username) {
		$query = $this->db->get_where($this->tbl, array('username' => $username));
		$query = $query->result_array();
		if($query){
			return $query[0];
		}
	}
}