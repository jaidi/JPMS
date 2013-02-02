<?php 

Class History extends CI_Model{
  
	public function __construct() 
	{
	   parent::__construct(); 
	   $this->load->database();
	}

	function add ($history){
		return $this->db->insert( 'history',$history);
	}

	/**** History updateable ????*****/
	function update($almonerNumber, $history){
		$this->db->where('almoner_number', $almonerNumber);
		$this->db->update($history, 'history');
	}
	/**** History updateable ????*****/
	function getByAlmonerNumber($almonerNumber){
		$this->db->where('almoner_number', $almonerNumber);
		return $this->db->get('history');
	}
	
 }
 ?>