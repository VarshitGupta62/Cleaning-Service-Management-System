<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class User_model extends CI_Model {  
      
    public function getin($todo)  
    {  
		// echo "this is model !<br>";
		// echo $a ;
		// $this->load->database('ci_demo');
		$data = array('todo' => $todo);

		$this->db->insert('basic_table', $data);  
		// echo "data insert successfully !!!";
    }  

	public function getall()
	{
		$sql = $this->db->get('basic_table'); 
		return $sql->result();
	}

	public function deletedata($no)
    {
        $this->db->where('no', $no);
        $this->db->delete('basic_table');
    }

	public function getbyid($no)
	{
		    // echo $no;
		 	// Assuming you have a database table named 'todos'
			$query = $this->db->get_where('basic_table', array('no' => $no));
	
			if ($query->num_rows() == 1) {
				return $query->row(); // Return the single row as an object
			} else {
				return null; // No matching todo item found
			}
	}

	public function edit_model($todo , $no)
	{
		// echo $todo;
		// echo $no;
        $data = array(
            'todo' => $todo
        );
        
        $this->db->where('no', $no);
        $this->db->update('basic_table', $data);

	}
	
	 

}  
?>  
