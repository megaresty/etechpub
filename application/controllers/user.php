<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
 	{
	   parent::__construct();
	   $this->load->database();
	   $this->load->model('usermodel');
	}
	
	public function index()
	{
		$this->load->view('user/v_headeruser');
		$this->load->view('user/v_homeuser');
		$this->load->view('user/v_footeruser');
	}
	 
	public function manual()
	{
		$this->load->view('user/v_headeruser');
		$this->load->view('user/v_manualuser');
		$this->load->view('user/v_footeruser');
	}
	
	public function borrow()
	{
		$this->load->view('user/v_headeruser');
		$this->load->view('user/v_');
		$this->load->view('user/v_footeruser');
	}
	
	public function complaintandrequest()
	{
		$this->load->view('user/v_headeruser');
		$this->load->view('user/v_compreq');
		$this->load->view('user/v_footeruser');
	}
	
	public function contactus()
	{
		$this->load->view('user/v_headeruser');
		$this->load->view('user/v_contactus');
		$this->load->view('user/v_footeruser');
	}
	
	public function searchresult()
	{
		$data['query']= $this->usermodel->search();
		$this->load->view('user/v_headeruser');
		$this->load->view('user/v_searchresult', $data);
		$this->load->view('user/v_footeruser');
	}
}
