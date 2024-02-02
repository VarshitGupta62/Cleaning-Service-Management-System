<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website_pro_main extends CI_Controller
{

	public function main()
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

		$this->load->model('admin_panel/service1_model');

		$user_data3 = $this->service1_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));
		// exit;

		$data = array(
			'user_data' => $user_data,
			'user_data2' => $user_data2,
			'user_data3' => $user_data3
		);

		// echo "<pre>";
		// print_r(	$data = array( 'user_data3' => $user_data3 ));
		// exit();

		$this->load->view('website_pro/common/header');
		$this->load->view("website_pro/index", $data);  // load the view file
		$this->load->view('website_pro/common/footer');
	}
}
