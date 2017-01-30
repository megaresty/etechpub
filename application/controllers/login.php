<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

   function __construct()
   {
      parent::__construct();
      $this->load->model('checklogin'); //memasukkan file model checklogin.php ke dalam controller
   }
   
	function index()
 	{
		$session = $this->session->userdata('isLogin'); //mengambil dari session apakah sudah login atau belum
		if($session == FALSE) //jika session false maka akan menampilkan hal login
		{
			$this->load->view('main/v_header');
		 	$this->load->view('main/v_login');
		 	$this->load->view('main/v_footer');
		}else //Jika session true maka diredirect ke halaman dashboard
	   	{
		  	redirect('dashboard');
	   	}
	 }
	
	 function do_login()
	 {
	 	$username = $this->input->post("uname");
		$password = $this->input->post("pass");
		
		$check = $this->checklogin->check_user($username, $password); //melakukan persamaan data dengan database
		if(count($check)==1){ //cek data berdasarkan username&password
			foreach($check as $check){
				$role = $check['GroupLog_idGroupLog']; //mengambil data (level/hak akses)
			}
			$this->session->set_userdata(array(
				'isLogin' => TRUE, //set data telah login
				'username' => $username, //set session username
				'role' => $role,)); //set session hak akses
			
			redirect('dashboard','refresh'); //redirect ke halaman dashboard
		}else{ //jika data tidak ada yang sama dengan database
			echo "<script>alert('Can't Login!')</script>";
			redirect('login','refresh');
		}
	 }
}
?>

