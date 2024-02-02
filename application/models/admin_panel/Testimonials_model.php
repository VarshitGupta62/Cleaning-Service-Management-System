<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonials_model extends CI_Model
{

	public function data_insert($a, $file)
	{

		// print_r($a);
		// exit();
		$data = array(
			'id' => $a['id'],
			'username' => $a['username'],
			'title' => $a['title'],
			'image' => $file,
			// Add other fields if needed
		);

		$this->db->insert('testimonials_master', $data);
	}

	public function getall_data()
	{
		$sql = $this->db->get('testimonials_master');
		return $sql->result();
	}

	public function getbyid($id)
	{
		// echo $no;
		// Assuming you have a database table named 'todos'
		$query = $this->db->get_where('testimonials_master', array('id' => $id));

		if ($query->num_rows() == 1) {
			return $query->row(); // Return the single row as an object
		} else {
			return null; // No matching todo item found
		}
	}

	public function edit_model($id, $data, $filename)
	{
		// echo $todo;
		// var_dump($no);
		$value = array(
			'username' => $data['username'], // Assuming $all is an associative array with a 'name' key
			'title' => $data['title'], // Assuming $all is an associative array with a 'designation' key
			'image' => $filename
		);

		// echo $id;
		// print_r($value);
		// exit();

		// Update the record based on the provided s_no.
		$this->db->where('id', $id);
		$this->db->update('team_master', $value);
	}

	public function edit_model_without_image($no, $data)
	{
		//  print_r($all);
		//  exit();
		$value = array(
			'username' => $data['username'], // Assuming $all is an associative array with a 'name' key
			'title' => $data['title'] // Assuming $all is an associative array with a 'designation' key
		);


		// Update the record based on the provided id.
		$this->db->where('id', $no);
		$this->db->update('testimonials_master', $value);
	}


	public function deletedata($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('testimonials_master');
	}
}
