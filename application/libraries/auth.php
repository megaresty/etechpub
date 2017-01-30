<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Auth{
	public function check_auth() {
		$this->ci =& get_instance();
		$this->sesi = $this->ci->session->userdata('isLogin');
		$this->hak = $this->ci->session->userdata('stat');
		if($this->sesi != TRUE){
			redirect('login','refresh');
			exit();
		}
	}
	
	public function role_user($except="") {
		if($this->hak==$except){
			echo "<script>alert('You can't access this page!');</script>";
			redirect('dashboard');
		} elseif ($this->hak==""){
			echo "<script>alert('You aren't logged in');</script>";
			redirect('login');
		} else {
		}
	}
}
?>