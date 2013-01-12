<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DpnRemarksController extends CI_Controller {

	 function __construct(){

		parent::__construct();
	    $this->load->model('DPN');
	    $this->load->model('DpnRemarks');
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
	function validateAndLoad(){
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('pgr_remarks', '', 'trim|required');
		$dpnId = $this->DPN->getIdByAlmoner("test2");
		if ($dpnId == -1){
			//TODO do something
		}
		
		if ( $this->uri->segment(4) == SR ){
//			$this->form_validation->set_rules('pgr_remarks', '', 'trim|required');
			$this->addSrRemarks($dpnId);
		}
		else if ( $this->uri->segment(4) == PGR){
			$this->addPgrRemarks($dpnId);
		}
		else if ($this->uri->segment(4) == VS){
			$this->addVsRemarks($dpnId);
		}
		

	}
	function addPgrRemarks($dpnId){
		
		$data = array(
			'dpn_id'	=> $dpnId,
			'pgr'		=> $this->input->post('pgr_remarks')
			);
		$this->DpnRemarks->add($data, $dpnId);

	}
	function addSrRemarks($dpnId){
		
		$data = array(
			'dpn_id'	=> $dpnId,
			'sr'		=> $this->input->post('sr_remarks')
			);
		$this->DpnRemarks->add($data, $dpnId);
	}
	function addVsRemarks($dpnId){
		
		$data = array(
			'dpn_id'	=> $dpnId,
			'vs'		=> $this->input->post('vs_remarks')
			);
		$this->DpnRemarks->add($data, $dpnId);
	}
	
}