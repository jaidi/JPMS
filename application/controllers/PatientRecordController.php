<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PatientRecordController extends CI_Controller {
	 private $session_data;// = $this->session->userdata('logged_in');
 function __construct()
 {
	parent::__construct();
    //$this->load->model('PatientBioData');
    $this->session_data = $this->session->userdata('logged_in');
 }

 function index()
 {
	if($this->session->userdata('logged_in'))
	{
		
		$data['username'] = $this->session_data['username'];
		$this->load->view('PatientRecord_view', $data);
	}
	else
	{
		//If no session, redirect to login page
		redirect('login', 'refresh');
	}
 }
 
}


?>