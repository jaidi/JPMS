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
	 $this->db->insert('patient_bio_data', $patientBioData);
	   
	   
	}
}
?>