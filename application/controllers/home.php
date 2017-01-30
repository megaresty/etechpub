<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
	function __construct(){
			parent::__construct();
			$this->check_isvalidated();
	}
	
	public function index(){
		//if the user is validated, then this function will run
		echo 'Congrats, you are logged in';
	}
	
	private function check_isvalidated(){
		if(! $this->session->userdate('validated')){
			redirect('login');
		}
	}
	
	public function do_logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>