<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PatientBioDataController extends CI_Controller {

 function __construct()
 {
   parent::__construct();
    $this->load->model('PatientBioData');
 }

 function index()
 {
   $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

  
   $this->form_validation->set_rules('name', 'Name:', 'trim|required');
   $this->form_validation->set_rules('age', 'Age:', 'trim|required');
   $this->form_validation->set_rules('sex', 'Sex:', 'trim|required');
   $this->form_validation->set_rules('father_name', 'Father Name:', 'trim|required');
//   $this->form_validation->set_rules('occupation', 'Occupation:', 'trim|required');
//   $this->form_validation->set_rules('address', 'Address:', 'trim|required');
   $this->form_validation->set_rules('telephone_number', 'Telephone #:', 'trim|required');
   $this->form_validation->set_rules('bed_number', 'Bed #:', 'trim|required');
   $this->form_validation->set_rules('admitted_from', 'Admitted From:', 'trim|required');
   $this->form_validation->set_rules('almoner_number', 'Almoner #:', 'trim|required|callback_add');


   
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.&nbsp; User redirected to login page
     $this->load->view('login_view');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }

 }

 function add ($almonerNumber){
 	// $patientBioData = new PatientBioData(); 
 	// $patientBioData->almonerNumber= $almonerNumber;
 	// $patientBioData->name = $this->input->post('name');
 	// $patientBioData->age = $this->input->post('age');
 	// $patientBioData->sex = $this->input->post('sex');
 	// $patientBioData->fatherName = $this->input->post('father_name');
 	// $patientBioData->occupation = $this->input->post('occupation');
 	// $patientBioData->address = $this->input->post('address');
 	// $patientBioData->telephoneNumber = $this->input->post('telephone_number');
 	// $patientBioData->bedNumber = $this->input->post('bed_number');
 	// $patientBioData->admittedFrom = $this->input->post('admitted_from');

   $data = array(
        'almoner_number' =>$almonerNumber,
          'name' => $this->input->post('name'),
          'age' => $this->input->post('age'),
          'sex' => $this->input->post('sex'),
          'father_name' =>$this->input->post('father_name'),
          'occupation' =>$this->input->post('occupation'),
          'address' => $this->input->post('address'),
          'telephone_number' => $this->input->post('telephone_number'),
          'bed_number' => $this->input->post('bed_number'),
          'admitted_from' =>$this->input->post('admitted_from'));


 	$this->PatientBioData->add($data);
 	// $patientBioData->
 	// $patientBioData->
 	// $patientBioData->
 	// $patientBioData->
 }

}


?>