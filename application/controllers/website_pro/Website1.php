<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website1 extends CI_Controller
{



	public function about()
	{
		$this->load->model('admin_panel/testimonials_model');

		$user_data = $this->testimonials_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));
		// exit;



		$this->load->model('admin_panel/team_model');

		$user_data2 = $this->team_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));
		// exit;

		$data = array(
			'user_data' => $user_data,
			'user_data2' => $user_data2
		);
		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/about", $data);  // load the view file
		$this->load->view('website_pro/common/footer');
	}

	public function team()
	{
		$this->load->model('admin_panel/team_model');

		$user_data = $this->team_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));
		// exit;

		$data = array('user_data' => $user_data);
		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/team", $data);  // load the view file
		$this->load->view('website_pro/common/footer');
	}

	public function history()
	{
		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/history");  // load the view file
		$this->load->view('website_pro/common/footer');
	}


	public function service()
	{
		$this->load->model('admin_panel/service1_model');

		$user_data = $this->service1_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));
		// exit;

		$data = array('user_data' => $user_data);

		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/service", $data);  // load the view file
		$this->load->view('website_pro/common/footer');
	}

	public function readmore($id)
	{
		$this->load->model('admin_panel/service1_model');


		$user_data = $this->service1_model->getbyid($id);

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));
		// exit;

		$data = array('user_data' => $user_data);

		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/readmore", $data);  // load the view file
		$this->load->view('website_pro/common/footer');
	}

	public function testimonials()
	{
		$this->load->model('admin_panel/testimonials_model');

		$user_data = $this->testimonials_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));
		// exit;

		$data = array('user_data' => $user_data);

		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/testimonials", $data);  // load the view file
		$this->load->view('website_pro/common/footer');
	}

	public function contactus()
	{

		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/contactus");  // load the view file
		$this->load->view('website_pro/common/footer');
	}

	public function gallery()
	{
		$this->load->model('admin_panel/admin_p');

		$user_data = $this->admin_p->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));
		// exit;

		$data = array('user_data' => $user_data);
		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/gallery", $data);  // load the view file
		$this->load->view('website_pro/common/footer');
	}

	public function project_detail()
	{
		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/project_detail");  // load the view file
		$this->load->view('website_pro/common/footer');
	}

	public function appointment()
	{

		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/appointment");  // load the view file
		$this->load->view('website_pro/common/footer');
	}

	public function appointment_data_in()
	{
		$all = $this->input->post();

		// echo "<pre>";
		// print_r($all);

		 

		$this->load->model('admin_panel/appointment_model');
		$this->appointment_model->datain($all);

		redirect('website_pro/Website1/appointment');
	}

	public function contactus_datain()
	{
		$all = $this->input->post();

		// echo "<pre>";
		// print_r($all);

		$this->load->model('admin_panel/contactus');
		$this->contactus->datain($all);

		redirect('website_pro/Website1/contactus');

	}
}
