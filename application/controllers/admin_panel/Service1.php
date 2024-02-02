<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service1 extends CI_Controller
{


	public function main()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin_panel/Admin1/login');
		}
		$this->load->model('admin_panel/service1_model');

		$user_data = $this->service1_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));

		$data = array('user_data' => $user_data);
		//  echo "<pre>";
		//   print_r($data);
		//  exit();

		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/service', $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function datain()
	{
		// Load the necessary libraries 
		$this->load->library('upload');
		$id['id'] = rand(111, 999999999);


		// Get the form input data
		$service_name = $this->input->post('service_name');
		$service_banifit = $this->input->post('service_banifit');
		$short_description = $this->input->post('short_description');
		$description = $this->input->post('description');

		// Handle the image upload
		$config['upload_path'] = './uploads/'; // Specify the directory where you want to save the uploaded images.
		$config['allowed_types'] = 'gif|jpg|jpeg|png'; // Define the allowed image file types.

		$this->upload->initialize($config);

		$this->upload->do_upload('image');

		// Image uploaded successfully
		$img_data = $this->upload->data();
		$image_file = "uploads/" . $img_data['file_name'];


		// Handle the file upload
		$config['allowed_types'] = 'pdf'; // Define the allowed file types for the file upload.

		$this->upload->initialize($config);

		$this->upload->do_upload('file');

		// File uploaded successfully
		$file_data = $this->upload->data();
		$file_name = "uploads/" . $file_data['file_name'];


		// Load the model
		$this->load->model('admin_panel/service1_model');



		// Call the model method to insert the data into the database
		$this->service1_model->insert_service_data($id, $service_name, $service_banifit, $description,  $image_file, $file_name , $short_description );

		// Redirect to the desired page after successful insertion
		redirect('admin_panel/Service1/main'); // Adjust the redirect URL as per your setu
	}

	public function  data_edit($id)
	{
		$this->load->model('admin_panel/service1_model');

		$data['all'] = $this->service1_model->getbyid($id);


		// echo"<pre>";
		// print_r($data);
		// exit();

		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/edit_service', $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function edit($id)
	{
		$this->load->model('admin_panel/service1_model');
		$data = $this->service1_model->getbyid($id);

		// print_r($data);
		$old_image_path =  $data->image;
		$old_file_path =  $data->file;

		// Get the form input data
		$service_name = $this->input->post('service_name');
		$service_banifit = $this->input->post('service_banifit');
		$description = $this->input->post('description');

		$data_all = array(
			'service_name' => $service_name,
			'service_banifit' => $service_banifit,
			'description' => $description
			// Add other fields here as necessary
		);

		// Handle the image upload
		$config['upload_path'] = './uploads/'; // Specify the directory where you want to save the uploaded images.
		$config['allowed_types'] = 'gif|jpg|jpeg|png'; // Define the allowed image file types.

		$this->upload->initialize($config);

		$this->upload->do_upload('image');

		// Image uploaded successfully
		$img_data = $this->upload->data();


		if ($img_data['raw_name'] == '') {
			$image_path = $old_image_path;
		} else {
			unlink($old_image_path);
			$image_path = "uploads/" . $img_data['file_name'];
		}



		// Handle the file upload
		$config['allowed_types'] = 'pdf'; // Define the allowed file types for the file upload.

		$this->upload->initialize($config);

		$this->upload->do_upload('file');

		// File uploaded successfully
		$file_data = $this->upload->data();

		if ($file_data['raw_name'] == '') {
			$file_path = $old_file_path;
		} else {
			unlink($old_file_path);
			$file_path = "uploads/" . $file_data['file_name'];
		}

		$this->load->model('admin_panel/service1_model');
		$this->service1_model->edit_model($id, $data_all, $image_path, $file_path);
		// exit();
		redirect('admin_panel/Service1/main');
	}


	public function  delete_data($id)
	{
		// echo $id; exit();
		$this->load->model('admin_panel/service1_model');
		$data = $this->service1_model->getbyid($id);


		// print_r($data);

		$old_image_path = './uploads/' . $data->image;
		$old_file_path = './uploads/' . $data->file;

		// echo $old_image_path;
		// echo $old_file_path;
		// exit();

		unlink($old_image_path);
		unlink($old_file_path);

		if (!empty($id)) {
			# code...
			// echo "delete no : ".$id ;

			$this->load->model('admin_panel/service1_model');
			$this->service1_model->deletedata($id);
			redirect('admin_panel/Service1/main');
		}
	}
}
