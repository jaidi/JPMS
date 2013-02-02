<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ExaminationController extends CI_Controller {

	 function __construct(){

		parent::__construct();
	    $this->load->model('Examination');
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
		 $validExamination = $this->PatientBioData->getByAlmoner($almonerNumber);
		 if ( $validExamination->num_rows>0){
			 $data = array(
		   		'almoner_number'		=> $this->input->post('almoner_number'),
				'doctor_name' 			=> $this->input->post('doctor_name'),
				'gpe' 					=> $this->input->post('gpe'),
				'head' 					=> $this->input->post('head'),
				'neck' 					=> $this->input->post('neck'),
				'thorax' 				=> $this->input->post('thorax'),
				'abdomen'				=> $this->input->post('abdomen'),
				'perineal' 				=> $this->input->post('perineal'),
				'upper_limb' 			=> $this->input->post('upper_limb'),
				'lower_limb' 			=> $this->input->post('lower_limb'),
				'pr_pv' 				=> $this->input->post('pr_pv'),
				'proctosigmoidoscopy'	=> $this->input->post('proctosigmoidoscopy'),
				'local' 				=> $this->input->post('local')
				/*'created_by' 			=> $session_data['username']*/
			 );
			 $this->Examination->add($data);
		 }
	}
}