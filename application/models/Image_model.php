<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Image_model extends CI_Model {  
      
    public function add_in($fileName) {
		$data = array(
			'image' => $fileName
		);
	
		// Insert the file name into the database.
		$this->db->insert('photo', $data); // Use 'photo' as the table name, not 'download3.jpeg'.
	}

	public function getall()
	{
		$sql = $this->db->get('photo'); 
		return $sql->result();
	}

	public function getbyid($s_no)
	{
		    // echo $no;
		 	// Assuming you have a database table named 'todos'
			$query = $this->db->get_where('photo', array('s_no' => $s_no));
	
			if ($query->num_rows() == 1) {
				return $query->row(); // Return the single row as an object
			} else {
				return null; // No matching todo item found
			}
	}

	public function edit_model($todo , $no)
	{
		// echo $todo;
		// var_dump($no);
        $data = array(
            'image' => $todo
        );

        // Update the record based on the provided s_no.
        $this->db->where('s_no', $no);
        $this->db->update('photo', $data);
	}

	public function deletedata($no)
    {
        $this->db->where('s_no', $no);
        $this->db->delete('photo');
    }

	 
	 

}
