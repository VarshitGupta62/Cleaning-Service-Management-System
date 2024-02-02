<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Appointment_model extends CI_Model
{

	public function datain($all)
	{


		// Insert the data into the 'services' table
		$this->db->insert('data_master', $all);
	}

	public function getall_data()
	{
		$sql = $this->db->get('data_master');
		return $sql->result();
	}

	public function deletedata($s_no)
	{
		$this->db->where('s_no', $s_no);
		$this->db->delete('data_master');
	}

	public function delete_contact_data($s_no)
	{
		$this->db->where('s_no', $s_no);
		$this->db->delete('contactus_master');
	}
	public function getbyid($id)
	{
		// echo $no;
		// Assuming you have a database table named 'todos'
		$query = $this->db->get_where('data_master', array('s_no' => $id));

		if ($query->num_rows() == 1) {
			return $query->row(); // Return the single row as an object
		} else {
			return null; // No matching todo item found
		}
	}

}
