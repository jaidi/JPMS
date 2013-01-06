<?php 

Class PatientBioData extends CI_Model{
  
  public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

	function add($patientBioData)
 	{
	   
	   // $data = array(
	   // 		'almonerNumber' =>$patientBioData->almonerNumber,
	   //     	'name' => $patientBioData->name,
	   //     	'age' => $patientBioData->age,
	   //     	'sex' => $patientBioData->fatherName,
	   //     	'occupation' => $patientBioData->occupation,
	   //     	'address' => $patientBioData->address,
	   //     	'telephoneNumber' => $patientBioData->telephoneNumber,
	   //     	'bedNumber' => $patientBioData->bedNumber,
	   //     	'admittedFrom' => $patientBioData->admittedFrom);
   // $this->load
	 return $this->db->insert('patient_bio_data', $patientBioData);   
	}
	
	function getByAlmoner($almonerNumber){
		$this->db->where('almoner_number', $almonerNumber);
		return $this->db->get('patient_bio_data');
		//return 
	}

	function updateByAlmoner($almonerNumber, $patientBioData){
		$this->db->where('almoner_number', $almonerNumber);
		$this->db->update('patient_bio_data', $patientBioData);
	}
}
?>