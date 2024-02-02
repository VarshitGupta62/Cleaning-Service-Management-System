<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View extends CI_Controller
{

	public function main($id)
	{
		// Manually load the appointment_model
		$this->load->model('admin_panel/appointment_model');

		$user_data = $this->appointment_model->getbyid($id);
	
		// Rest of your code remains the same
		$data = array('user_data' => $user_data);


		// echo "<pre>";
		// print_r($data);
		// exit();
		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/view_page' , $data);
		$this->load->view('admin_panel/common/footer');
	}
}
