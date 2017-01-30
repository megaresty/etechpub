<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usertechpub extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('checklogin');
		$this->auth->check_auth(); //ambil auth dari library
		$this->load->database();
	    $this->load->model('utechpub');
	}

	function incoming(){
		$data['staff_name']=$this->utechpub->staffname_dropdown();
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_incomingusertechpub', $data);
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function searchincoming(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_searchincoming');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function newdatadocument(){
		$data['staff_name']=$this->utechpub->staffname_dropdown();
		$data['engine_name']=$this->utechpub->engine_dropdown();
		$data['aircraft_name']=$this->utechpub->aircraft_dropdown();
		$data['acreg']=$this->utechpub->acreg_dropdown();
		$data['media_name']=$this->utechpub->media_dropdown();
		$data['capability_name']=$this->utechpub->capability_dropdown();
		$data['doctype_desc']=$this->utechpub->doctype_dropdown();
		$data['vendor_desc']=$this->utechpub->vendor_dropdown();
		$data['location_name']=$this->utechpub->location_dropdown();
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_newdatadocumentusertechpub', $data);
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function editdatadocument(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_usertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function distributionhistory(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_usertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function searchdatadocument(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_searchdocumentusertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function searchtemprevision(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_searchtemprev');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function newtemprevision(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_addnewtemprev');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function distribution(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_distribution');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function distribution2(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_distributioncon');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function reminder(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_usertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function borrow(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_borrowusertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function breturn(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_usertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function searchborrow(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_usertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function overduelist(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_usertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function blacklist(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_usertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function complaintandrequest(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_comreq');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function listofcomplaint(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_usertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function listofrequest(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_usertechpub');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function searchresult()
	{
		$data['query']= $this->utechpub->search2();
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_searchresultutechpub', $data);
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function resultsearchincoming()
	{
		$data['query']= $this->utechpub->searchincoming();
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_searchresultincoming', $data);
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function addnewstaff()
	{
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_addnewstaff');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function addstaff()
	{
		$data['query']= $this->utechpub->insert_new_staff();
		$this->load->view('usertechpub/v_headerusertechpub');
		//$this->load->view('usertechpub/v_searchresultincoming', $data);
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function newaircraft()
	{
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_newaircraft');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function addaircraft()
	{
		$data['query']= $this->utechpub->insert_new_aircraft();
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_newaircraft');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function newacreg()
	{
		$data['aircraft_name']=$this->utechpub->aircraft_dropdown();
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_newacreg', $data);
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function addacreg()
	{
		$data['query']= $this->utechpub->insert_new_acreg();
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_newaircraft');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	//soon hapus ya
	function cobalanjut(){
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_adddoccon');
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function addincoming()
	{
		//$data['']
		$data['query']= $this->utechpub->insert_incoming();
		$flash_data =
            '<div class="alert alert-success">
            <h4><i class="fa fa-info-circle fa-lg"></i> &nbsp;Add new incoming successfull!</h4>
            </div>';
			//$this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Add new incoming successfull!</div></div>");
        	redirect(site_url('../index.php/usertechpub/incoming'));
		//$this->load->view('usertechpub/v_headerusertechpub');
		//$this->load->view('usertechpub/v_searchresultincoming', $data);
		//$this->load->view('usertechpub/v_footerusertechpub');
	}

	function editincoming($idincoming){
		$this->load->model('utechpub');
		$data['incoming']=$this->utechpub->getincoming($idincoming);
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_updateincoming', $data);
		$this->load->view('usertechpub/v_footerusertechpub');
	}

	function updateincoming(){
		$id = $this->input->post('idin');
		$data=array(
			'ctrlno' => $this->input->post('ctrlno'),
			'docno' => $this->input->post('docno'),
			'revision' => $this->input->post('revision'),
			'newdocrev' => $this->input->post('newdocrev'),
			'doctype' => $this->input->post('doctype'),
			'rev_type' => $this->input->post('rev_type'),
			'name' => $this->input->post('name'),
			'nopeg' => $this->input->post('nopeg'),
			'received_date' => $this->input->post('received_date'),
			'rack' => $this->input->post('rack'),
			'followby' => $this->input->post('followby'),
			'in_status' => $this->input->post('in_status'),
			'remark' => $this->input->post('remark'),
			'date_close' => $this->input->post('date_close'),
			'doc_title' => $this->input->post('doc_title'),
			'vendor' => $this->input->post('vendor'),
			'cage_code' => $this->input->post('cage_code'),
			'ata' => $this->input->post('ata'),
			'in_format' => $this->input->post('in_format'),
			'no_copy' => $this->input->post('no_copy'),
			'po_no' => $this->input->post('po_no'),
			'ship_no' => $this->input->post('shipno'),
			'ship_date' => $this->input->post('ship_date'),
			'masterqty' => $this->input->post('masterqty'),
			'duplicateqty' => $this->input->post('duplicateqty'),
			'distributionqty' => $this->input->post('distributionqty'),
			'dvdcd' => $this->input->post('dvdcd'),
			'hardcopy' => $this->input->post('hardcopy'),
			'pagescon' => $this->input->post('pagescon'),
			'revcon' => $this->input->post('revcon'),
			'note' => $this->input->post('note'),
		);
		$this->utechpub->updateincoming($id,$data);

        $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update incoming successfull !!</div></div>");
        redirect(site_url('../index.php/usertechpub/incoming'));
	}

 	function delete_incoming($id){
        $this->load->model('utechpub');
        $this->utechpub->delete_incoming($id);

        redirect(site_url('../index.php/usertechpub/resultsearchincoming'));
  	}

		function detail_incoming()
		{
			//$data['query']= $this->utechpub->searchincoming();
			$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_incomingdetail'/*, $data*/);
			$this->load->view('usertechpub/v_footerusertechpub');
		}

		function notification()
		{
			$data['query']= $this->utechpub->searchincoming();
			$this->load->view('usertechpub/v_headerusertechpub');
			$this->load->view('usertechpub/v_notificationtable', $data);
			$this->load->view('usertechpub/v_footerusertechpub');
		}

  	function download() {
  		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
		$query = $this->db->query("SELECT * from incoming")->result();
		$data['hasil'] = $query;
		// Load view "pdf_report"
		$this->load->view('page_laporan', $data); }
	}

	function addnewdocument()
	{
		//$data['']
		$data['query']= $this->utechpub->insert_document();
		$flash_data =
            '<div class="alert alert-success">
            <h4><i class="fa fa-info-circle fa-lg"></i> &nbsp;Add new document successfull!</h4>
            </div>';
			//$this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Add new incoming successfull!</div></div>");
        	//redirect(site_url('../index.php/usertechpub/incoming'));
		$this->load->view('usertechpub/v_headerusertechpub');
		$this->load->view('usertechpub/v_adddoccon', $data);
		$this->load->view('usertechpub/v_footerusertechpub');
	}



?>
