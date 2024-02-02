<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactus extends CI_Model
{
	public function datain($all)
	{
		// Insert the data into the 'services' table
		$this->db->insert('contactus_master', $all);
	}

	public function getall_data()
	{
		$sql = $this->db->get('contactus_master');
		return $sql->result();
	}

	

}
