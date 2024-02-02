<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_type extends CI_Controller
{

	public function main()
	{
		$this->load->model('admin_panel/service_type_model');

		$user_data = $this->service_type_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));

		$data = array('user_data' => $user_data);



		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/service_type', $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function datain()
	{

		$id['id'] = rand(111, 999999999);

		// Get the form input data
		$service_type = $this->input->post('service_type');

		// echo $id['id'];
		// echo $service_type;
		// exit();

		// Load the model
		$this->load->model('admin_panel/service_type_model');

		// Call the model method to insert the data into the database
		$this->service_type_model->insert_service_data($id, $service_type);

		// Redirect to the desired page after successful insertion
		redirect('admin_panel/Service_type/main'); // Adjust the redirect URL as per your setu
	}

	public function  data_edit($id)
	{
		$this->load->model('admin_panel/service_type_model');

		$data['all'] = $this->service_type_model->getbyid($id);


		// echo"<pre>";
		// print_r($data);
		// exit();

		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/edit_service_type', $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function edit($id)
	{
		// Get the form input data
		// echo $id;
		// exit();

		$service_type = $this->input->post();

		// echo $service_type;
		// exit();

		$this->load->model('admin_panel/service_type_model');
		$this->service_type_model->edit_model($id, $service_type);
		// exit();

		redirect('admin_panel/Service_type/main');
	}
}
