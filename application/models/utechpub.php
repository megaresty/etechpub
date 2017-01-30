<?php
class Utechpub extends CI_Model {
	
	function __construct() {
        parent::__construct();
        $this->load->database();
    }
	//ini juga buat coba2 aja
	function cobaview(){
		$this->db->select("idstaff, nopeg, staff_name");
		$this->db->from('staff');
		$query=$this->db->get();
		return $query->result();
	}
	
	// ini yang bisa, cuma buat coba2 aja kok
	function search2(){
		$search_docno=trim($this->input->post('docno'));
		$search_title=trim($this->input->post('title'));
		$where_condition="docno LIKE '%$search_docno%'";
		if(!empty($search_title)){
			$where_condition .="AND title LIKE '%$search_title%'";
		}
		
		$this->db->select('*');
		$this->db->from("revision");
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
       	$this->db->join("revision r", "r.vendor_idvendor=v.idvendor");
		$this->db->join("doctype d","d.idDocType=r.doctype_iddoctype");
		$this->db->where($where_condition);
		$query=$this->db->get();
		return $query->result();
	}
	
	function searchincoming(){
		$search_docno=trim($this->input->post('docno'));
		$search_name=trim($this->input->post('name'));
		$where_condition="docno LIKE '%$search_docno%'";
		if(!empty($search_name)){
			$where_condition .="AND name LIKE '%$search_name%'";
		}
		
		$this->db->select('*');
		$this->db->from("incoming");
		$this->db->where($where_condition);
		$query=$this->db->get();
		return $query->result();
	}
	
	public function select_max_no_staff(){
		$query = $this->db->query('SELECT MAX(idstaff) AS no FROM staff;');
		return $query->row()->no;
	}
	
	public function insert_new_staff(){
		$no = $this->select_max_no_staff()+1;
		$in_nopeg = $this->input->post('nopeg');
		$in_staff_name = $this->input->post('staff_name');
		$in_phone = $this->input->post('phone');
		$data = array (
			'idstaff' => $no,
			'nopeg' => $in_nopeg,
			'staff_name'  => $in_staff_name,
			'phone' => $in_phone,
			);  
		$this->db->insert('staff',$data);
	}
	
	public function select_max_no_incoming(){
		$query = $this->db->query('SELECT MAX(idincoming) AS no FROM incoming;');
		return $query->row()->no;
	}
	
	public function insert_incoming(){
		$id = $this->select_max_no_incoming()+1;
		$in_name = $this->input->post('name');
		$in_nopegg = $this->input->post('nopeg');
		$in_ctrlno = $this->input->post('ctrlno');
		$in_docno = $this->input->post('docno');
		$in_recdate = $this->input->post('received_date');
		$in_doctype = $this->input->post('doctype');
		$in_newdocrev = $this->input->post('newdocrev');
		$in_revtype = $this->input->post('rev_type');
		$in_dvdcd = $this->input->post('dvdcd');
		$in_hardcopy = $this->input->post('hardcopy');
		$in_note = $this->input->post('note');
		$in_doctitle = $this->input->post('doc_title');
		$in_vendor = $this->input->post('vendor');
		$in_cage = $this->input->post('cage_code');
		$in_ata = $this->input->post('ata');
		$in_revision = $this->input->post('revision');
		$in_format = $this->input->post('in_format');
		$in_nocopy = $this->input->post('no_copy');
		$in_pono = $this->input->post('po_no');
		$in_shipno = $this->input->post('ship_no');
		$in_shipdate = $this->input->post('ship_date');
		$in_pagescon = $this->input->post('pagescon');
		$in_revcon = $this->input->post('revcon');
		$in_masterqty = $this->input->post('masterqty');
		$in_duplicateqty = $this->input->post('duplicateqty');
		$in_distributionqty = $this->input->post('distributionqty');
		$in_rack = $this->input->post('rack');
		$in_followby = $this->input->post('followby');
		$in_status = $this->input->post('in_status');
		$in_remark = $this->input->post('remark');
		$in_dateclose = $this->input->post('date_close');
		
		$data = array (
			'idincoming' => $id,
			'name' => $in_name,
			'nopeg' => $in_nopegg,
			'ctrlno' => $in_ctrlno,
			'docno' => $in_docno,
			'received_date' => $in_recdate,
			'doctype' => $in_doctype,
			'newdocrev'  => $in_newdocrev,
			'rev_type' => $in_revtype,
			'dvdcd' => $in_dvdcd,
			'hardcopy' => $in_hardcopy,
			'note' => $in_note,
			'doc_title' => $in_doctitle,
			'vendor' => $in_vendor,
			'cage_code' => $in_cage,
			'ata' => $in_ata,
			'revision' => $in_revision,
			'in_format' => $in_format,
			'no_copy' => $in_nocopy,
			'po_no' => $in_pono,
			'ship_no' => $in_shipno,
			'ship_date' => $in_shipdate,
			'pagescon' => $in_pagescon,
			'revcon' => $in_revcon,
			'masterqty' => $in_masterqty,
			'duplicateqty' => $in_duplicateqty,
			'distributionqty' => $in_distributionqty,
			'rack' => $in_rack,
			'followby' => $in_followby,
			'in_status' => $in_status,
			'remark' => $in_remark,
			'date_close' => $in_dateclose,
			);  
		$this->db->insert('incoming',$data);
	}
	
	function delete_incoming($id){
        $this->db->reconnect();
        $query=$this->db->query("DELETE FROM incoming where idincoming = $id");
        if($query){
            return 0;
        }else{
            return -1;
        }
    }
	
	
	function staffname_dropdown(){
		$query=$this->db->query('select staff_name from staff order by idstaff');
		
		return $query->result();
	}
	
	public function edit_incoming(){
		$ctrlno = $this->input->post('ctrlno');
		$docno = $this->input->post('docno');
		$revision = $this->input->post('revision');
		$newdocrev = $this->input->post('newdocrev');
		$doctype = $this->input->post('doctype');
		$rev_type = $this->input->post('rev_type');
		$name = $this->input->post('name');
		$nopeg = $this->input->post('nopeg');
		$revdate = $this->input->post('revdate');
		$received_date = $this->input->post('received_date');
		$rack = $this->input->post('rack');
		$followby = $this->input->post('followby');
		$in_status = $this->input->post('in_status');
		$remark = $this->input->post('remark');
		$date_close = $this->input->post('date_close');
		$doc_title = $this->input->post('doc_title');
		$vendor = $this->input->post('vendor');
		$cage_code = $this->input->post('cage_code');
		$ata = $this->input->post('ata');
		$in_format = $this->input->post('in_format');
		$no_copy = $this->input->post('no_copy');
		$po_no = $this->input->post('po_no');
		$ship_no = $this->input->post('shipno');
		$ship_date = $this->input->post('ship_date');
		$masterqty = $this->input->post('masterqty');
		$duplicateqty = $this->input->post('duplicateqty');
		$distributionqty = $this->input->post('distributionqty');
		$dvdcd = $this->input->post('dvdcd');
		$hardcopy = $this->input->post('hardcopy');
		$pagescon = $this->input->post('pagescon');
		$revcon = $this->input->post('revcon');
		$note = $this->input->post('note');

		$this->load->model('utechpub');
		$ok = $this->utechpub->edit_incoming($ctrlno, $docno, $revision, $newdocrev, $doctype, $rev_type, $name, $nopeg, $revdate, $received_date, $rack, $followby, $in_status, $remark, $date_close, $doc_title, $vendor, $cage_code, $ata, $in_format, $no_copy, $po_no, $ship_no, $ship_date, $masterqty, $duplicateqty, $distributionqty, $dvdcd, $hardcopy, $pagescon, $revcon, $note);

        $this->session->set_flashdata("pesan","<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update incoming successfull !!</div></div>");
        redirect(site_url('../index.php/usertechpub/incoming'));
       
       
  }
  
  public function getincoming($idincoming){
	  $this->db->select('*');
	  $this->db->from('incoming');
	  $this->db->where('idincoming', $idincoming);
	  $data = $this->db->get();
	  
	  /*if($query->num_rows()){
		  return $query->result_array();
	  } else {
		  return false;
	  }*/
	  return $data->result();
  }
  
  public function updateincoming($id, $data){
	  $this->db->where('idincoming', $id);
	  $this->db->update('incoming', $data);
  }
  
  public function select_max_no_revisi(){
		$query = $this->db->query('SELECT MAX(idrevision) AS no FROM revision;');
		return $query->row()->no;
	}
	//soon ini yang document ya meg
	public function select_max_no_revisi2(){
		$query = $this->db->query('SELECT MAX(iddoc) AS no FROM document;');
		return $query->row()->no;
	}
	
	public function insert_new_document(){
		$doc_id = $this->select_max_no_staff2()+1;
		$no = $this->select_max_no_revisi()+1;
		$doc_docno = $this->input->post('docno');
		$doc_ata = $this->input->post('ata');
		$doc_rev = $this->input->post('rev');
		$doc_indexref = $this->input->post('index_ref');
		$doc_status = $this->input->post('status');
		$doc_title = $this->input->post('title');
		$doc_vendor = $this->input->post('vendor');
		$doc_qty = $this->input->post('qty');
		$doc_dateindex = $this->input->post('dateindex');
		$doc_originator = $this->input->post('originator');
		$doc_doctype = $this->input->post('doctype');
		$doc_location = $this->input->post('location');
		$doc_date = $this->input->post('date');
		$doc_indexcheck = $this->input->post('indexcheck');
		$doc_pic = $this->input->post('staff_name');
		$doc_partno = $this->input->post('partno');
		$doc_serno = $this->input->post('serno');
		$doc_engine = $this->input->post('engine');
		$doc_aircraft = $this->input->post('aircraft');
		$doc_acreg = $this->input->post('acreg');
		$doc_media = $this->input->post('media');
		$doc_capability = $this->input->post('capability');
		$doc_note = $this->input->post('note');
		$doc_vendpubno = $this->input->post('vendpubno');
		$doc_cagecode = $this->input->post('cagecode');
		$doc_revperiod = $this->input->post('revperiod');
		$doc_nextperiod = $this->input->post('nextperiod');
		$doc_duedate = $this->input->post('duedate');
		$doc_contractagr = $this->input->post('contractagr');
		$data = array (
			'docID' => $doc_id,
			'idtemprev' => $no,
			//'vendor_idvendor' =>,
			//'location_idlocation' =>,
			//'doctype_iddoctype' =>,
			//'staff_idstaff' =>,
			'docno' => $doc_docno,
			'title' => $doc_title,
			//'titlesap' =>,
			'doctype' => $doc_doctype,
			//'sapdoctype' =>,
			'rev' => $doc_rev,
			'revdate' => $doc_date,
			'vendorcode' => $doc_vendor,
			'ata' => $doc_ata,
			'note' => $doc_note,
			'vendpubno' => $doc_vendpubno,
			'cagecode' => $doc_cagecode,
			'contagree' => $doc_contractagr,
			'location' => $doc_location,
			'qty' => $doc_qty,
			'status' => $doc_status,
			'indexdate' => $doc_dateindex,
			'partno' => $doc_partno,
			'indexref' => $doc_indexref,
			//'unit' => ,
			'revperiod' => $doc_revperiod,
			'nextperiod' => $doc_nextperiod,
			'contduedate' => $doc_duedate,
			'indexcheck' => $doc_indexcheck,
			'serno' => $doc_serno,
			'originator' => $doc_originator,
			'pic' => $doc_pic,
			'shipdate' => $doc_shipdate,
			'recdate' => $doc_recdate,
			'rcvddate' => $doc_rcvddate,
			'rcvdmedia' => $doc_rcvdmedia,
			'rcvdmediaqty' => $doc_rcvdmediaqty,
			);  
		$this->db->insert('staff',$data);
	}
	
	public function select_max_no_aircraft(){
		$query = $this->db->query('SELECT MAX(idaircraft) AS no FROM aircraft;');
		return $query->row()->no;
	}
	
	public function insert_new_aircraft(){
		$no = $this->select_max_no_aircraft()+1;
		$in_aircraft = $this->input->post('aircraft');
		$data = array (
			'idaircraft' => $no,
			'aircraft_name'  => $in_aircraft,
			);  
		$this->db->insert('aircraft',$data);
	}
	
	public function select_max_no_acreg(){
		$query = $this->db->query('SELECT MAX(idacreg) AS no FROM acreg;');
		return $query->row()->no;
	}
	
	public function insert_new_acreg(){
		//$aircraftlist=trim($this->input->post('aircraftlist'));
		//$where_condition="aircraft_name='.$aircraftlist.'";
		
		//$this->db->select('idaircraft');
		//$this->db->from("aircraft");
		//$this->db->where($where_condition);
		//$in_ac=$this->db->get();
		
		$no = $this->select_max_no_acreg()+1;
		$in_ac = $this->input->post('aircraftlist');
		$in_acreg = $this->input->post('acreg');
		$data = array (
			'idacreg' => $no,
			'aircraft_idaircraft' => $in_ac,
			'acreg'  => $in_acreg,
			);  
		$this->db->insert('acreg',$data);
	}
	
	function engine_dropdown(){
		$query=$this->db->query('select * from engine order by idengine');
		
		return $query->result();
	}
	
	function aircraft_dropdown(){
		$query=$this->db->query('select * from aircraft order by idaircraft');
		
		return $query->result();
	}
	
	function acreg_dropdown(){
		$query=$this->db->query('select * from acreg order by idacreg');
		
		return $query->result();
	}
	
	function media_dropdown(){
		$query=$this->db->query('select * from media order by idmedia');
		
		return $query->result();
	}
	
	function capability_dropdown(){
		$query=$this->db->query('select * from capability order by idCapability');
		
		return $query->result();
	}
	//
	function doctype_dropdown(){
		$query=$this->db->query('select * from doctype order by idDocType');
		
		return $query->result();
	}
	
	function vendor_dropdown(){
		$query=$this->db->query('select* from vendor order by idVendor');
		
		return $query->result();
	}
	
	function location_dropdown(){
		$query=$this->db->query('select * from location order by idLocation');
		
		return $query->result();
	}
	
}
	
	

/*belum join yaaa */
?>