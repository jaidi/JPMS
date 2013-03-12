
<?php
Class User extends CI_Model
{
 public $id;
 public $username;
 public $password;
 public $type;

 function __construct()
 {
    parent::__construct();
 }
  
 function login($username, $password)
 {
   $this -> db -> from('users');
   $this -> db -> where('username = ' . "'" . $username . "'");
   $this -> db -> where('password = ' . "'" . $password . "'");
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 public function getAllUsers()
 {
   $all_users = array();
   
   $this -> db -> select('id, username, password, type');
   $this -> db -> from('users');
   
   $query = $this -> db -> get();

   if($query -> num_rows() >= 1)
   {
     foreach($query->result('User') as $user)
	 {
		$all_users[] = $user;
	 }
     return $all_users;
   }
   else
   {
     return false;
   }
 }
 
 public function deleteUser($id)
 {
   $this->db->delete('users', array('id' => $id)); 
 }
 
 public function updateRole($id, $type)
 {
   $this->db->where('id', $id);
   $this->db->update('users', array('type' => $type)); 	
 }
}
?>

