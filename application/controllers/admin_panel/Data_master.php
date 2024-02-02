<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_master extends CI_Controller
{

	public function main()
{
    if (!$this->session->userdata('id')) {
        return redirect('admin_panel/Admin1/login');
    }

    // Manually load the appointment_model
    $this->load->model('admin_panel/appointment_model');

    $user_data = $this->appointment_model->getall_data();

	$this->load->model('admin_panel/contactus');

    $user_data2 = $this->contactus->getall_data();

    // Rest of your code remains the same
    $data = array('user_data' => $user_data,
	               'user_data2' => $user_data2
                 );
    $this->load->view('admin_panel/common/header');
    $this->load->view('admin_panel/common/sidebar');
    $this->load->view('admin_panel/data_table', $data);
    $this->load->view('admin_panel/common/footer');
}


	public function  delete_data($id)
	{

		if (!empty($id)) {
			# code...
			// echo "delete no : ".$id ;

			$this->load->model('admin_panel/appointment_model');
			$this->appointment_model->deletedata($id);
			redirect('admin_panel/Data_master/main');
		}
	}

	public function  contact_delete_data($id)
	{

		if (!empty($id)) {
			# code...
			// echo "delete no : ".$id ;

			$this->load->model('admin_panel/appointment_model');
			$this->appointment_model->delete_contact_data($id);
			redirect('admin_panel/Data_master/main');
		}
	}
}
