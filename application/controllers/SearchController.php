
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
		if ($almonerNumber != null ){
			$data['bioData'] 		= $this->patientBioData->getByAlmoner($almonerNumber);
			$data['dpn']			= $this->DPN->getByAlmonerNumber($almonerNumber);
			$data['drugs']			= $this->Drugs->getByAlmonerNumber($almonerNumber);
			$data['examination'] 	= $this->Examination->getByAlmonerNumber($almonerNumber);
			$data['operation'] 		= $this->Operation->getByAlmonerNumber($almonerNumber);
			$data['history'] 		= $this->History->getByAlmonerNumber($almonerNumber);
			$this->load->view('PatientRecord_view', $data);
	 	}
	 }
	 
	 function getPatient(){
	 	$almonerNumber = $this->input->post('almoner_number');
		$data  = array( );
		if ($almonerNumber != null ){
			$data['bioData'] 		= $this->patientBioData->getByAlmoner($almonerNumber);
			$data['dpn']			= $this->DPN->getByAlmonerNumber($almonerNumber);
			$data['drugs']			= $this->Drugs->getByAlmonerNumber($almonerNumber);
			$data['examination'] 	= $this->Examination->getByAlmonerNumber($almonerNumber);
			$data['operation'] 		= $this->Operation->getByAlmonerNumber($almonerNumber);
			$data['history'] 		= $this->History->getByAlmonerNumber($almonerNumber);
			$this->load->view('PatientRecord_view', $data);
		}
		
	 }
 
}

?>

