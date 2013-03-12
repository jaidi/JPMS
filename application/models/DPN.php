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
		$this->db->where(GENERAL_COLUMN_ALMONER_NUMBER, $almonerNumber);
		$this->db->update(DPN_TABLE, $dpn);
	}
	/**** dpn updateable ????*****/
	function getByAlmonerNumber($almonerNumber){
		$this->db->where(GENERAL_COLUMN_ALMONER_NUMBER, $almonerNumber);
		$query = $this->db->get(DPN_TABLE);
		
		if($query->num_rows>0){
			return $query->row();
		}
		
		return null;
	}
	function getIdByAlmoner($almonerNumber){
		//$this->db->select('id');
		$this->db->where(GENERAL_COLUMN_ALMONER_NUMBER, $almonerNumber);
		$query = $this->db->get(DPN_TABLE);
		if ($query->num_rows>0){
			foreach ($query->result() as $rows)
			{
				return $rows->id;
			}
		}
		return -1;
	}
 }
 ?>