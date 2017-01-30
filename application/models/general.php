<?php
class General extends CI_Model {
	
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
		$where_condition = "d.docno LIKE '%$search_docno%'";
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
			$where_condition .="AND a.aircraft_name LIKE '%$search_aircraft%'";
		} else if(!empty($search_acreg)){
			$where_condition .="AND c.acreg_name LIKE '%$search_acreg%'";
		} else if(!empty($search_engine)){
			$where_condition .="AND e.engine_name LIKE '%$search_engine%'";
		} else if(!empty($search_vendor)){
			$where_condition .="AND v.vendor_desc LIKE '%$search_vendor%'";
		}
		
		$this->db->select('*');
		$this->db->from("revision_doc r");
       	$this->db->join("staff s", "s.idstaff=r.staff_idstaff");
		$this->db->join("doctype t","t.idDocType=r.doctype_iddoctype");
		$this->db->join("location l","l.idLocation=r.location_idlocation");
		$this->db->join("vendor v","v.idvendor=r.vendor_idvendor");
		$this->db->join("document d","d.iddoc=r.docID");
		$this->db->join("aircraft_has_document ahd","ahd.Document_idDocument=d.iddoc");
		$this->db->join("aircraft a","a.idaircraft=ahd.aircraft_idaircraft");
		$this->db->join("acreg_has_document chd","chd.Document_idDocument=d.iddoc");
		$this->db->join("acreg c","c.idacreg=chd.ACReg_idACReg");
		$this->db->join("engine_has_document ehd","ehd.Document_idDocument=d.iddoc");
		$this->db->join("engine e","e.idengine=ehd.Engine_idEngine");
		$this->db->join("capability_has_document phd","phd.Document_idDocument=d.iddoc");
		$this->db->join("capability p","p.idCapability=phd.Capability_idCapability");
		$this->db->where($where_condition);
		$this>
		$query=$this->db->get();
		return $query->result();
	}
}
	
	

/*belum join yaaa */
?>