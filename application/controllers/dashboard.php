<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('checklogin');
		$this->auth->check_auth(); //ambil auth dari library
	}
	
	function index(){
		$get_account = $this->checklogin->get_user($this->session->userdata('uname'));
		$data = array(
			'user' => $get_account,);
		$stat = $this->session->userdata('role');
		if($stat==2){//usertechpub
			$this->load->view('usertechpub/v_headerusertechpub',$data);
			$this->load->view('usertechpub/v_homeusertechpub',$data);
			$this->load->view('usertechpub/v_footerusertechpub',$data);
		} else if($stat==3){//userunit
			$this->load->view('userunit/v_headerunit',$data);
			$this->load->view('userunit/v_homeunit',$data);
			$this->load->view('userunit/v_footerunit',$data);
		} else {//user
			$this->load->view('user/v_headeruser',$data);
			$this->load->view('user/v_homeuser',$data);
			$this->load->view('user/v_footeruser',$data);
		}
	}
	
	function login(){
		$session = $this->session->userdata('isLogin');
		if($session==FALSE){
			$this->load->view('main/v_header');
			$this->load->view('main/v_login');
			$this->load->view('main/v_footer');
		}else{
			redirect('dashboard');
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
?>