<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team_model extends CI_Model
{

	public function add_data($id, $all, $filename)
	{

		// print_r($id);
		// print_r($all);
		// echo $filename;
		// exit();


		$data = array(
			'id' => $id['id'], // Assuming $id is an associative array with an 'id' key
			'name' => $all['name'], // Assuming $all is an associative array with a 'name' key
			'designation' => $all['designation'], // Assuming $all is an associative array with a 'designation' key
			'image' => $filename
		);

		// print_r($data);
		// exit();

		// Insert the data into the 'team_master' table
		$this->db->insert('team_master', $data);
	}
	public function getall_data()
	{
		$sql = $this->db->get('team_master');
		return $sql->result();
	}

	public function getbyid($id)
	{
		// echo $no;
		// Assuming you have a database table named 'todos'
		$query = $this->db->get_where('team_master', array('id' => $id));

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
			'name' => $data['name'], // Assuming $all is an associative array with a 'name' key
			'designation' => $data['designation'], // Assuming $all is an associative array with a 'designation' key
			'image' => $filename
		);

		// echo $id;
		// print_r($value);
		// exit();

		// Update the record based on the provided s_no.
		$this->db->where('id', $id);
		$this->db->update('team_master', $value);
	}

	public function edit_model_without_image($id, $data)
	{
		// echo $todo;
		// var_dump($no);
		$value = array(
			'name' => $data['name'], // Assuming $all is an associative array with a 'name' key
			'designation' => $data['designation'], // Assuming $all is an associative array with a 'designation' key
		);

		// echo $id;
		// print_r($value);
		// exit();

		// Update the record based on the provided s_no.
		$this->db->where('id', $id);
		$this->db->update('team_master', $value);
	}

	public function deletedata($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('team_master');
	}
}
