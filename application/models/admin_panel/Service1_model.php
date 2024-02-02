<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service1_model extends CI_Model
{

	public function insert_service_data($id, $service_name, $service_banifit, $description, $image_file, $file_name , $short_description)
	{
		// Assuming you have a table named 'services' to store the data
		$data = array(
			'id' => $id['id'],
			'service_name' => $service_name,
			'service_banifit' => $service_banifit,
			'description' => $description,
			'image' => $image_file,
			'file' => $file_name,
			'short_description' => $short_description
		);

		// print_r($data);

		// Insert the data into the 'services' table
		$this->db->insert('service_master', $data);
	}

	public function getall_data()
	{
		$sql = $this->db->get('service_master');
		return $sql->result();
	}

	public function getbyid($id)
	{
		// echo $no;
		// Assuming you have a database table named 'todos'
		$query = $this->db->get_where('service_master', array('id' => $id));

		if ($query->num_rows() == 1) {
			return $query->row(); // Return the single row as an object
		} else {
			return null; // No matching todo item found
		}
	}

	public function edit_model($id, $data,  $image_path, $file_path)
	{
		// echo $todo;
		// var_dump($no);
		$value = array(

			'service_name' => $data['service_name'],
			'service_banifit' => $data['service_banifit'],
			'description' => $data['description'],
			 
			'image' => $image_path,
			'file' =>  $file_path

		);

		// echo $id;
		// print_r($value);
		// exit();

		// Update the record based on the provided s_no.
		$this->db->where('id', $id);
		$this->db->update('service_master', $value);
	}


	public function deletedata($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('service_master');
	}
}
