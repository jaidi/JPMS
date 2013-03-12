<?php 

Class Operation extends CI_Model{
  
	public function __construct() 
	{
	   parent::__construct(); 
	   $this->load->database();
	}

	function add ($operation){
		return $this->db->insert( 'operation',$operation);
	}

	/**** History updateable ????*****/
	function update($almonerNumber, $operation){
		$this->db->where('almoner_number', $almonerNumber);
		$this->db->update($operation, 'operation');
	}
	/**** History updateable ????*****/
	function getByAlmonerNumber($almonerNumber){
		$this->db->where('almoner_number', $almonerNumber);
		$query =  $this->db->get('operation');
		
		if($query->num_rows>0){
			return $query->row();
		}
		
		return null;
	}
	
 }
 ?>