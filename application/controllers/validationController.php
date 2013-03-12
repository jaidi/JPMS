
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class validatinoController extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->load->helper(array('form', 'url'));
   $this->load->view('validation');
 }

}

?>

