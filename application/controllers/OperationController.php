<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OperationController extends CI_Controller {

	 function __construct(){

		parent::__construct();
	    $this->load->model('Operation');
	    $this->load->model('PatientBioData');
	    
	 }

	function index(){
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('PatientRecord_view', $data);
		}
		else{
			redirect('login', 'refresh');
		}
	}

	function validateAndLoad (){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		/*$this->form_validation->set_rules('doctor_name', 'Doctor Name:', 'trim|required');
		$this->form_validation->set_rules('gpe', 'GPE:', 'trim|required');
		$this->form_validation->set_rules('head', 'Head:', 'trim|required');
		$this->form_validation->set_rules('neck', 'Neck:', 'trim|required');
		$this->form_validation->set_rules('thorax', 'Thorax:', 'trim|required');
		$this->form_validation->set_rules('abdomen', 'Abdomen:', 'trim|required');
		$this->form_validation->set_rules('perineal', 'Perineal:', 'trim|required');
		$this->form_validation->set_rules('upper_limb', 'Upper Limb:', 'trim|required');
		$this->form_validation->set_rules('lower_limb', 'Lower Limb:', 'trim|required');
		$this->form_validation->set_rules('pr_pv', 'PR/PV:', 'trim|required');		
		$this->form_validation->set_rules('proctosigmoidoscopy', 'Proctosigmoidoscopy:', 'trim|required');
		$this->form_validation->set_rules('local', 'Local:', 'trim|required');*/
		$this->form_validation->set_rules('almoner_number', 'Almoner Number:', 'trim|required');
	   
		if($this->form_validation->run() == FALSE){
			 $this->load->view('login_view');
		}
		else{
			$data = $this->addToDb();
			$this->load->view('home_view', $data );
		}
	}

	function addToDb(){

		$almonerNumber = $this->input->post('almoner_number');
		// $alreadyExists = $this->Examination->getByAlmonerNumber($almonerNumber);
		$starting_time = $this->input->post('ddList_starting_hour').':'.$this->input->post('ddList_starting_minutes');
		$ending_time = $this->input->post('ddList_ending_hour').':'.$this->input->post('ddList_ending_minutes');
		 $validOperation = $this->PatientBioData->getByAlmoner($almonerNumber);
		 if ( $validOperation->num_rows>0){
			 $data = array(
		   		'almoner_number'	=> $this->input->post('almoner_number'),
				'bed_number' 		=> $this->input->post('bed_number'),
				'starting_time' 	=> $starting_time,
				'ending_time' 		=> $ending_time,
				'operation' 		=> $this->input->post('operation'),
				'surgeon' 			=> $this->input->post('surgeon'),
				'nurse'				=> $this->input->post('nurse'),
				'anaesthesia'	 	=> $this->input->post('anaesthesia'),
				'anaesthesia_by'	=> $this->input->post('anaesthesia_by'),
				'incision' 			=> $this->input->post('incision'),
				'findings' 			=> $this->input->post('findings'),
				'procedure' 		=> $this->input->post('procedure'),
				'closure' 			=> $this->input->post('closure'),
				'drain' 			=> $this->input->post('drain')
				/*'created_by' 			=> $session_data['username']*/
			 );
			 $this->Operation->add($data);
		 }
	}
}