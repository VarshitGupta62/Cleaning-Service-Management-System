<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_p extends CI_Model
{

	public function check_login($username, $password)
	{
		// echo "welcome to my model";
		// echo $username;
		// echo $password;

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('login_master');

		// Check if there is a matching row in the database
		if ($query->num_rows()) {
			// User credentials are valid
			// echo "true";
			return  $query->row();
		} else {
			// User credentials are invalid
			// echo "false";
			return false;
		}
	}

	public function add_image($a, $title, $filename)
	{
		// echo $a['id'];
		// echo $tittle;
		// echo $data;

		$data = array(
			'id' => $a['id'],
			'title' => $title,
			'image' => $filename
		);

		// print_r($data);
		// exit();

		$this->db->insert('gallery_master', $data);
	}

	public function getall_data()
	{
		$sql = $this->db->get('gallery_master');
		return $sql->result();
	}

	public function getbyid($id)
	{
		// echo $no;
		// Assuming you have a database table named 'todos'
		$query = $this->db->get_where('gallery_master', array('id' => $id));

		if ($query->num_rows() == 1) {
			return $query->row(); // Return the single row as an object
		} else {
			return null; // No matching todo item found
		}
	}

	public function edit_model($todo, $no, $title)
	{
		// echo $todo;
		// var_dump($no);
		$data = array(
			'image' => $todo,
			'title' => $title
		);

		// Update the record based on the provided s_no.
		$this->db->where('id', $no);
		$this->db->update('gallery_master', $data);
	}

	public function edit_model_without_image($no, $title)
	{
		// echo $todo;
		// var_dump($no);
		$data = array(
			'title' => $title
		);

		// Update the record based on the provided s_no.
		$this->db->where('id', $no);
		$this->db->update('gallery_master', $data);
	}

	public function deletedata($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('gallery_master');
	}
}
