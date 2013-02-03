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
		return $this->db->get('operation');
	}
	
 }
 ?>