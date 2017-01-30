<?php
class Usermodel extends CI_Model {
	
	function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
	function cobaview(){
		$this->db->select("idtempstaff, nopeg, staff_name");
		$this->db->from('staff');
		$query=$this->db->get();
		return $query->result();
	}
	/*
	function search(){
		$match = $this->input->post('search');
		$this->db->like('docno',$match);
		//$this->db->and_like('partno',$match);
		$query=$this->db->get('revstaff');
		return $query->result();
	}*/
	// ini yang bisa
	function search2(){
		$search_docno=trim($this->input->post('docno'));
		$search_title=trim($this->input->post('title'));
		$where_condition="docno LIKE '%$search_docno%'";
		if(!empty($search_title)){
			$where_condition .="AND title LIKE '%$search_title%'";
		}
		
		$this->db->select('*');
		$this->db->from("revstaff");
		$this->db->where($where_condition);
		$query=$this->db->get();
		return $query->result();
	}
	
	function search(){
		$search_docno=trim($this->input->post('docno'));
		$search_cage=trim($this->input->post('cagecode'));
		$search_title=trim($this->input->post('title'));
		$search_unit=trim($this->input->post('unit'));
		$search_partno=trim($this->input->post('partno'));
		$search_ata=trim($this->input->post('ata'));
		$search_aircraft=trim($this->input->post('aircraft'));
		$search_acreg=trim($this->input->post('acreg'));
		$search_engine=trim($this->input->post('engine'));
		$search_vendor=trim($this->input->post('vendor'));
		//tambahin else if yaaa meg
		$where_condition = "r.docno LIKE '%$search_docno%'";
		if(!empty($search_cage)){
			$where_condition .="AND r.cagecode LIKE '%$search_cage%'";
		} else if(!empty($search_title)){
			$where_condition .="AND r.title LIKE '%$search_title%'";
		} else if(!empty($search_unit)){
			$where_condition .="AND r.unit LIKE '%$search_unit%'";
		} else if(!empty($search_partno)){
			$where_condition .="AND r.partno LIKE '%$search_partno%'";
		} else if(!empty($search_ata)){
			$where_condition .="AND r.ata LIKE '%$search_ata%'";
		} else if(!empty($search_aircraft)){
			$where_condition .="AND aircraft LIKE '%$search_aircraft%'";
		} else if(!empty($search_acreg)){
			$where_condition .="AND acreg LIKE '%$search_acreg%'";
		} else if(!empty($search_engine)){
			$where_condition .="AND engine LIKE '%$search_engine%'";
		} else if(!empty($search_vendor)){
			$where_condition .="AND v.vendor_desc LIKE '%$search_vendor%'";
		}
		
		$this->db->select('*');
		$this->db->from("vendor v");
       	$this->db->join("revstaff r", "r.vendor_idvendor=v.idtempvendor");
		$this->db->join("doctype d","d.idDocType=r.doctype_iddoctype");
		$this->db->where($where_condition);
		$query=$this->db->get();
		return $query->result();
	}
}
	
	

/*belum join yaaa */
?>