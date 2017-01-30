<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	   $this->load->model('general');
	}
	
	public function index()
	{
		$this->load->view('main/v_header');
		$this->load->view('main/v_home');
		$this->load->view('main/v_footer');
	}
	 
	public function manual()
	{
		$this->load->view('main/v_header');
		$this->load->view('main/v_manual');
		$this->load->view('main/v_footer');
	}
	
	public function borrow()
	{
		$this->load->view('main/v_header');
		$this->load->view('main/v_ruleborrow');
		$this->load->view('main/v_footer');
	}
	
	public function complaint()
	{
		$this->load->view('main/v_header');
		$this->load->view('main/v_');
		$this->load->view('main/v_footer');
	}
	
	public function request()
	{
		$this->load->view('main/v_header');
		$this->load->view('main/v_');
		$this->load->view('main/v_footer');
	}
	
	public function contactus()
	{
		$this->load->view('main/v_header');
		$this->load->view('main/v_contact');
		$this->load->view('main/v_footer');
	}
	
	public function searchresult()
	{
		$data['query']= $this->general->search();
		$this->load->view('main/v_header');
		$this->load->view('main/v_searchresult', $data);
		$this->load->view('main/v_footer');
	}
	//ini hanya coba, soon hapus
	public function coba(){
		$this->data['staff']=$this->general->cobaview();
		$this->load->view('main/v_viewtemp',$this->data);
	}
	
	
}
?>