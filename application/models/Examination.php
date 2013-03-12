<?php 

Class Examination extends CI_Model{
  
	public function __construct() 
	{
	   parent::__construct(); 
	   $this->load->database();
	}

	function add ($examination){
		return $this->db->insert( 'examination',$examination);
	}

	/**** examination updateable ????*****/
	function update($almonerNumber, $examination){
		$this->db->where('almoner_number', $almonerNumber);
		$this->db->update($examination, 'examination');
	}
	/**** examination updateable ????*****/
	function getByAlmonerNumber($almonerNumber){
		$this->db->where('almoner_number', $almonerNumber);
		$query = $this->db->get('examination');
		
		if($query->num_rows>0){
			return $query->row();
		}
		
		return null;
	}
	
 }
 ?>