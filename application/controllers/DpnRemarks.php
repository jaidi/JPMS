<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DpnController extends CI_Controller {

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
		
	}
	function addPgrRemarks(){
		$dpnId = $this->input->post('dpn_id');
		$data = array(
			'dpn_id'	=> $this->input->post('dpn_id'),
			'pgr'		=> $this->input->post('pgr')
			);

	}
	function addSrRemarks(){
		$dpnId = $this->input->post('dpn_id');
		$data = array(
			'dpn_id'	=> $this->input->post('dpn_id'),
			'sr'		=> $this->input->post('vs')
			);
	}
	function addVsRemarks(){
		$dpnId = $this->input->post('dpn_id');
		$data = array(
			'dpn_id'	=> $this->input->post('dpn_id'),
			'vs'		=> $this->input->post('vs')
			);
	}
	
}