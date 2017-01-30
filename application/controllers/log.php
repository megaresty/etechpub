<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Login extends CI_Controller{
			function __construct(){
				parent::__construct();
			}
			
			public function index(){
				//load our view to be displayed
				//to the user
				$data['msg']=$msg;
				$this->load->view('main/v_header');
				$this->load->view('main/v_login');
				$this->load->view('main/v_footer');
			}
			
			public function process(){
				//load the model
				$this->load->model('login_model');
				//validate the user can login
				$result=$this->login_model->validate();
				//now we verify the result
				if(! $result){
					//if user didn't validate, then show them login page
					$msg = '<font color="#FF0000">Invalid username and/or password.</font><br />';
					$this->index($msg);
				} else {
					//if user did validate, send them to members area
					redirect('home');
				}
			}
	}
?>