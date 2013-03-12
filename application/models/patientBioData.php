<?php 

Class PatientBioData extends CI_Model{
  
  public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

	function add($patientBioData)
 	{
	 	return $this->db->insert(PATIENT_BIO_DATA_TABLE, $patientBioData);   
	}
	
	function getByAlmoner($almonerNumber){
		$this->db->where(GENERAL_COLUMN_ALMONER_NUMBER, $almonerNumber);
		return $this->db->get(PATIENT_BIO_DATA_TABLE)->row();
	}
	
	function updateByAlmoner($almonerNumber, $patientBioData){
		$this->db->where(GENERAL_COLUMN_ALMONER_NUMBER, $almonerNumber);
		$this->db->update(PATIENT_BIO_DATA_TABLE, $patientBioData);
	}
}
?>