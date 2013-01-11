<?php 

Class DPN extends CI_Model{
  
	public function __construct() 
	{
	   parent::__construct(); 
	   $this->load->database();
	}

	function add ($dpn){
		return $this->db->insert( 'dpn',$dpn);
	}


	/**** dpn updateable ????*****/
	function update($almonerNumber, $dpn){
		$this->db->where('almoner_number', $almonerNumber);
		$this->db->update($dpn, 'dpn');
	}
	/**** dpn updateable ????*****/
	function getByAlmonerNumber($almonerNumber){
		$this->db->where('almoner_number', $almonerNumber);
		return $this->db->get('dpn');
	}
 }
 ?>