<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PatientBioDataController extends CI_Controller {
	 private $session_data;// = $this->session->userdata('logged_in');
 function __construct()
 {
	parent::__construct();
    $this->load->model('PatientBioData');
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
 
 function validateAndLoad(){
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
  
	$this->form_validation->set_rules('name', 'Name:', 'trim|required');
	$this->form_validation->set_rules('age', 'Age:', 'trim|required');
	$this->form_validation->set_rules('sex', 'Sex:', 'trim|required');
	$this->form_validation->set_rules('father_name', 'Father Name:', 'trim|required');
	//$this->form_validation->set_rules('occupation', 'Occupation:', 'trim|required');
	//$this->form_validation->set_rules('address', 'Address:', 'trim|required');
	$this->form_validation->set_rules('telephone_number', 'Telephone #:', 'trim|required');
	$this->form_validation->set_rules('bed_number', 'Bed #:', 'trim|required');
	$this->form_validation->set_rules('admitted_from', 'Admitted From:', 'trim|required');
	$this->form_validation->set_rules('almoner_number', 'Almoner #:', 'trim|required');
   
	if($this->form_validation->run() == FALSE)
	{
		 //Field validation failed.&nbsp; User redirected to login page
		 $this->load->view('login_view');

	}
	else
	{
		 //Go to private area
	//	$data['result'] = "waaah saaiin waah";
	$data = 	$this->addOrUpdate($this->input->post('almoner_number'));
		 $this->load->view('home_view', $data );
	}
 
 }

 function addOrUpdate($almonerNumber){
$this->session_data = $this->session->userdata('logged_in');
$username = $this->session_data['username'];
   $data = array(
   		'almoner_number'	=> $almonerNumber,
		'name' 				=> $this->input->post('name'),
		'age' 				=> $this->input->post('age'),
		'sex' 				=> $this->input->post('sex'),
		'father_name' 		=> $this->input->post('father_name'),
		'occupation' 		=> $this->input->post('occupation'),
		'address'			=> $this->input->post('address'),
		'telephone_number' 	=> $this->input->post('telephone_number'),
		'bed_number' 		=> $this->input->post('bed_number'),
		'admitted_from' 	=> $this->input->post('admitted_from'),
		'created_by'		=> $username);
   
   $alreadyExists =  $this->PatientBioData->getByAlmoner($almonerNumber);
 //  $this->PatientBioData->add($data); 
  // echo $alreadyExists;
   if ($alreadyExists->num_rows==0){
   		//array_push($data, 'almoner_number' => $almonerNumber);
 	//	$data['almoner_number'] = $almonerNumber;
 		return $this->PatientBioData->add($data);   		
   }
   else{

 		$this->PatientBioData->updateByAlmoner($almonerNumber, $data);
 		return $alreadyExists;
 	}

 }

 function existingBioData($almonerNumber){
 	$query = $this->PatientBioData->getByAlmoner($almonerNumber);
 	/**
 	*
 	* add null check
 	*
 	**/
 	$data = array();
 	foreach ($query->result() as $row)
	{
		$data['almoner_number'] = $row->almoner_number;
    	$data['name'] =  $row->name;
    	$data['age'] = $row->age;
    	$data['sex'] = $row->sex;
    	$data['father_name'] = $row->father_name;
    	$data['occupation'] = $row->occupation;
    	$data['address'] = $row->address;
    	$data['telephone_number'] = $row->telephone_number;
    	$data['bed_number'] = $row->bed_number;
    	$data['admitted_from'] = $row->admitted_from;
	}
 	return $data;
 }

	


}


?>