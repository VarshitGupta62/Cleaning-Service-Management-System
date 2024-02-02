<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_type_model extends CI_Model
{

	public function insert_service_data($id, $service_type)
	{
		// Assuming you have a table named 'services' to store the data
		$data = array(
			'id' => $id['id'],
			'service_type' => $service_type
		);

		// print_r($data);
		// exit();

		// Insert the data into the 'services' table
		$this->db->insert('service_type_master', $data);
	}

	public function getall_data()
	{
		$sql = $this->db->get('service_type_master');
		return $sql->result();
	}

	public function getbyid($id)
	{
		// echo $no;
		// Assuming you have a database table named 'todos'
		$query = $this->db->get_where('service_type_master', array('id' => $id));

		if ($query->num_rows() == 1) {
			return $query->row(); // Return the single row as an object
		} else {
			return null; // No matching todo item found
		}
	}

	public function edit_model($id, $data)
	{
		//  print_r($data);
		//  exit();

		// Update the record based on the provided s_no.
		$this->db->where('id', $id);
		$this->db->update('service_type_master', $data);
	}


	// public function deletedata($id)
	// {
	// 	$this->db->where('id', $id);
	//     $this->db->delete('service_master');

	// }

}
