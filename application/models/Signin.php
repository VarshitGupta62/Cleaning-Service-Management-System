<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Signin extends CI_Model {  

	public function __construct()
    {
        parent::__construct();
        // Load the database library if not autoloaded
        $this->load->database();
    }
      
	public function getin($user_name, $user_email, $password)
    {
        // Assuming you have a table named 'users' with columns 'user_name', 'user_email', and 'password'
        $data = array(
            'user_name' => $user_name,
            'user_email' => $user_email,
            'password' => $password
        );
        
		// echo "<pre>";
		// print_r($data);
        // Insert the data into the 'users' table
        $this->db->insert('users', $data); 
		// echo "<br>data insert successfully !!!";
    }  

	public function check($user_email, $password )
	{
		// $data_check = array(
        //     'user_email' => $user_email,
        //     'password' => $password
        // );
        
		// echo "<pre>";
		// print_r($data_check);
		$this->db->where('user_email', $user_email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        // Check if there is a matching row in the database
        if ($query->num_rows() > 0) {
            // User credentials are valid
			// echo "true";
            return true;
        } else {
            // User credentials are invalid
			// echo "false";
            return false;
        }

	}

}  
?>  
