<?php 

Class Drugs extends CI_Model{
  
	public function __construct() 
	{
	   parent::__construct(); 
	   $this->load->database();
	}

	function add ($drugs){
		return $this->db->insert( 'drugs',$drugs);
	}

	/**** History updateable ????*****/
	function update($almonerNumber, $drugs){
		$this->db->where('almoner_number', $drugs);
		$this->db->update('drugs', $drugs);
	}
	/**** History updateable ????*****/
	function getByAlmonerNumber($almonerNumber){
		$this->db->where('almoner_number', $almonerNumber);
		$query = $this->db->get('drugs');
	
		if($query->num_rows>0){
			return $query->row();
		}
		
		return null;
	}
	
	function cancelDrug(){
		
	}
 }
 ?>