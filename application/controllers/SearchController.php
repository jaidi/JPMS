
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SearchController extends CI_Controller {

	 function __construct()
	 {
		parent::__construct();
		$this->load->model('DPN');
		$this->load->model('patientBioData');
		$this->load->model('DpnRemarks');
		$this->load->model('Drugs');
		$this->load->model('Examination');
		$this->load->model('Operation');
		$this->load->model('History');
		
		
	 }
	
	 function index()
	 {
	   	$this->load->helper(array('form', 'url'));
	   	 $almonerNumber = $this->input->post('almoner_number');
		 $data  = array( );
		 //if ($almonerNumber != null ){
			// $data['bioData'] 		= $this->validateResultData($this->patientBioData->getByAlmoner($almonerNumber));
			// $data['dpn']			= $this->validateResultData($this->DPN->getByAlmonerNumber($almonerNumber));
			// $data['drugs']			= $this->validateResultData($this->Drugs->getByAlmonerNumber($almonerNumber));
			// $data['examination']	= $this->validateResultData($this->Examination->getByAlmonerNumber($almonerNumber));
			// $data['operation'] 		= $this->validateResultData($this->Operation->getByAlmonerNumber($almonerNumber));
			// $data['history'] 		= $this->validateResultData($this->History->getByAlmonerNumber($almonerNumber));
			// $this->load->view('PatientRecord_view', $data);
	 //	 }
	 //	$this->getPatient();
		$this->load->view('PatientRecord_view', $this->getPatient($almonerNumber));
	 }
	 
	 function getPatient($almonerNumber){
	 	//$almonerNumber = $this->input->post('almoner_number');
		$data  = array( );
		if ($almonerNumber != null ){
			$data['bioData'] 		= $this->validateResultData	($this->patientBioData->getByAlmoner($almonerNumber));
			 $data['dpn']			= $this->validateResultData($this->DPN->getByAlmonerNumber($almonerNumber));
			// $data['drugs']			= validateResultData($this->Drugs->getByAlmonerNumber($almonerNumber));
			 $data['examination']	= $this->validateResultData($this->Examination->getByAlmonerNumber($almonerNumber));
			 $data['operation'] 	=$this-> validateResultData($this->Operation->getByAlmonerNumber($almonerNumber));
			 $data['history'] 		= $this->validateResultData($this->History->getByAlmonerNumber($almonerNumber));
			return $data;
		}
		return null;
		
	 }
	 
	 function validateResultData($bioData){
	 		
	 	if( isset($bioData) ){
			foreach($bioData as $key => $value) {
					
				if (!isset($value) ||  $value == null){		
					$bioData->$key = '';
				}
				
			}
			return $bioData;
		}
		
		return null;
	 }
	 
	 function validateDpn($dpn){
	 	 if (isset($dpn)){
 	 		
	 	 }
		 return null;
	  }
	  function validateDrugs($drugs){
		 if (isset($drugs)){
 	 		
	 	 }
		 return null;
	  }
	  function validateExamination($examination){
	 	 if (isset($examination)){
 	 		
	 	 }
		 return null;
	  }
	  function validateOperation($operation){
	 	 if (isset($operation)){
 	 		
	 	 }
		 return null;
	  }
	  function validateHistory($history){
	 	 if (isset($history)){
 	 		
	 	 }
		 return null;
	  }
	
}

?>

