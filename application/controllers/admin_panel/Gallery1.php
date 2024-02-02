<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery1 extends CI_Controller
{

	public function gallery()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin_panel/Admin1/login');
		}
		$this->load->model('admin_panel/admin_p');

		$user_data = $this->admin_p->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));

		$data = array('user_data' => $user_data);
		//  print_r($data);
		//  exit();

		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/gallery', $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function image_in()
	{
		$title = $this->input->post('title');
		$id['id'] = rand(111, 999999999);

		// print_r($a);
		// exit();

		$config['upload_path'] = './uploads/'; // Specify the directory where you want to save the uploaded image.
		$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf'; // Define the allowed file types.

		$this->upload->initialize($config);

		$this->upload->do_upload('image');

		// echo "<pre>";
		// print_r($this->upload->data());

		$img_data = $this->upload->data();
		$fileName = $img_data['file_name'];

		// echo $fileName;
		$this->load->model('admin_panel/admin_p');

		$this->admin_p->add_image($id, $title, $fileName);

		redirect('admin_panel/Gallery1/gallery');
	}

	public function image_edit($no)
	{
		// echo $no ;
		// exit();
		$this->load->model('admin_panel/admin_p');
		// var_dump( $this->image_model->getbyid($no));
		// exit();
		$data['image'] = $this->admin_p->getbyid($no);
		//  $this->load->view('image_pro/edit' , $data);

		// print_r($data);


		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/edit_image', $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function edit_data($id)
	{

		$title = $this->input->post('title');

		$this->load->model('admin_panel/admin_p');
		$data['image'] = $this->admin_p->getbyid($id);

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$this->upload->initialize($config);

		// Check if a new image is uploaded
		if ($this->upload->do_upload('image')) {
			// If a new image is uploaded, delete the old image first
			$old_image_path = './uploads/' . $data['image']->image;
			unlink($old_image_path);

			// Process the newly uploaded image
			$img_data = $this->upload->data();
			$fileName = $img_data['file_name'];

			// Update the database with the new image and other information
			$this->load->model('admin_panel/admin_p');
			$this->admin_p->edit_model($fileName, $id, $title);
		} else {
			// If no new image is uploaded, update the other information only
			$this->load->model('admin_panel/admin_p');
			$this->admin_p->edit_model_without_image($id, $title);
		}

		redirect('admin_panel/Gallery1/gallery');
	}

	public function  delete_data($id)
	{
		// echo $id; exit();
		$this->load->model('admin_panel/admin_p');

		$data['image'] =	$this->admin_p->getbyid($id);

		$old_image_path = './uploads/' . $data['image']->image;
		unlink($old_image_path);

		if (!empty($id)) {
			# code...
			// echo "delete no : ".$id ;

			$this->load->model('admin_panel/admin_p');
			$this->admin_p->deletedata($id);
			redirect('admin_panel/Gallery1/gallery');
		}
	}
}
