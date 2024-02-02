<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin1 extends CI_Controller
{

	public function main()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin_panel/Admin1/login');
		}
		$this->load->model('admin_panel/appointment_model');

		$user_data = $this->appointment_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));
		// exit;

		$data = array('user_data' => $user_data);
		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view("admin_panel/index", $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function login()
	{
		$this->load->view('admin_panel/login');
	}

	public function in() // check longin action from login page
	{
		$this->load->model('admin_panel/admin_p');

		// $user_name = $this->input->post('user_name');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// echo $password ;
		// echo $username;

		$z = $this->admin_p->check_login($username, $password);

		// print_r($z);
		// exit();

		if ($z) {
			// User credentials are valid, redirect to the dashboard or success page
			$id = $z->id;
			$username = $z->username;

			$this->session->set_userdata('id', $id);
			$this->session->set_userdata('username', $username);

			redirect('admin_panel/Admin1/main');
		} else {
			// User credentials are invalid, show the login form again or redirect to an error page
			$this->session->set_flashdata('msg', 'Invalid Email or Password !');
			redirect('admin_panel/Admin1/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('msg', 'Logout successfully !');
		return redirect('admin_panel/Admin1/login');
	}
}
