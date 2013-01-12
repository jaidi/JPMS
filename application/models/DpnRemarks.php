<?php 

Class DpnRemarks extends CI_Model{
  
	public function __construct() 
	{
	   parent::__construct(); 
	   $this->load->database();
	}

	function add ($dpnRemarks, $dpnId){
		$this->db->where('dpn_id', $dpnId);
		$result = $this->db->get('dpn_remarks');
		if ($result->num_rows>0){
			$this->update($dpnId, $dpnRemarks);
			return;
		}
		return $this->db->insert( 'dpn_remarks',$dpnRemarks);
	}
	
	function update($dpnId, $dpnRemarks){
		$this->db->where('dpn_id', $dpnId);
		$this->db->update('dpn_remarks', $dpnRemarks);
	}
	
	
	
	
	// function getByAlmonerNumber($almonerNumber){
	// 	$this->db->where('almoner_number', $almonerNumber);
	// 	return $this->db->get('dpn');
	// }
 }
 ?>