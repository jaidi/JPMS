<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RolesController extends CI_Controller {
 private $session_data;// = $this->session->userdata('logged_in');
 
 function __construct()
 {
	parent::__construct();
    $this->load->model('PatientBioData');
	$this->load->model('user');
    $this->session_data = $this->session->userdata('logged_in');
 }

 function index()
 {
	if($this->session->userdata('logged_in'))
	{
		$data['username'] = $this->session_data['username'];
		$this->load->view('Roles_view', $data);
	}
	else
	{
		redirect('login', 'refresh');
	}
 }
 
 function getAllUsers() 
 {
	$data['users'] = $this->user->getAllUsers();
	$this->load->view('Roles_view', $data);
 }
 
 function deleteUser()
 {
	$id = $this->uri->segment(3);
	$this->user->deleteUser($id);
	$data['users'] = $this->user->getAllUsers();
	$this->load->view('Roles_view', $data);
 }

}


?>