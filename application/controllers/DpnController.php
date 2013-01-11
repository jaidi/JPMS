<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DpnController extends CI_Controller {

	 function __construct(){

		parent::__construct();
	    $this->load->model('DPN');
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
		$this->form_validation->set_rules('pulse_rate', 'Pulse Rate:', 'trim|required');
		$this->form_validation->set_rules('blood_pressure', 'Blood Pressure:', 'trim|required');
		$this->form_validation->set_rules('respiratory_rate', 'Respiratory Rate:', 'trim|required');
		$this->form_validation->set_rules('temperature', 'Temperature:', 'trim|required');
		$this->form_validation->set_rules('cvp', 'CVP:', 'trim|required');
		$this->form_validation->set_rules('pain', 'Pain:', 'trim|required');
		$this->form_validation->set_rules('problems', 'Problems:', 'trim|required');
		$this->form_validation->set_rules('plan', 'Plan:', 'trim|required');
		$this->form_validation->set_rules('action', 'Action:', 'trim|required');
		$this->form_validation->set_rules('almoner_number', 'Almoner Number:', 'trim|required');
	   
		if($this->form_validation->run() == FALSE){
			 $this->load->view('login_view');
		}
		else{
			$data = 	$this->addToDb();
			$this->load->view('home_view', $data );
		}
	}

	function addToDb(){

		$almonerNumber = $this->input->post('almoner_number');
		$alreadyExists = $this->DPN->getByAlmonerNumber($almonerNumber);
		$validDpn = $this->PatientBioData->getByAlmoner($almonerNumber);
		if ($alreadyExists->num_rows==0 && $validDpn->num_rows>0){
			 $data = array(
	   		'almoner_number'	=> $this->input->post('almoner_number'),
			'pulse_rate' 				=> $this->input->post('pulse_rate'),
			'blood_pressure' 				=> $this->input->post('blood_pressure'),
			'respiratory_rate' 				=> $this->input->post('respiratory_rate'),
			'temperature' 		=> $this->input->post('temperature'),
			'cvp' 		=> $this->input->post('cvp'),
			'pain'			=> $this->input->post('pain'),
			'problems' 	=> $this->input->post('problems'),
			'plan' 		=> $this->input->post('plan'),
			'action' 	=> $this->input->post('action')
			'created_by' =>$session_data['username']);
			 $this->DPN->add($data);
		}
	}
	function addRemarks (){

	}
}