<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonials1 extends CI_Controller
{

	public function testimonials()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin_panel/Admin1/login');
		}
		$this->load->model('admin_panel/testimonials_model');

		$user_data = $this->testimonials_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));

		$data = array('user_data' => $user_data);
		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/testimonials', $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function data_in()
	{
		$a = $this->input->post();

		// print_r($a);

		$a['id'] = rand(111, 999999999);


		$config['upload_path'] = './uploads/'; // Specify the directory where you want to save the uploaded image.
		$config['allowed_types'] = 'gif|jpg|jpeg|png'; // Define the allowed file types.

		$this->upload->initialize($config);

		$this->upload->do_upload('image');

		// echo "<pre>";
		// print_r($this->upload->data());

		$img_data = $this->upload->data();
		$fileName = $img_data['file_name'];

		$this->load->model('admin_panel/testimonials_model');

		$this->testimonials_model->data_insert($a, $fileName);

		redirect('admin_panel/Testimonials1/testimonials');
	}

	public function edit_data($no)
	{
		// echo $no ;
		// exit();
		$this->load->model('admin_panel/testimonials_model');

		// var_dump( $this->testimonials_model->getbyid($no));
		// exit();
		$data['data'] = $this->testimonials_model->getbyid($no);

		// print_r($data);




		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/edit_testimonials', $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function  change_data($id)
	{


		$all = $this->input->post();

		// print_r($all);
		//  exit();

		$this->load->model('admin_panel/testimonials_model');

		$data['image'] =	$this->testimonials_model->getbyid($id);





		$config['upload_path'] = './uploads/'; // Specify the directory where you want to save the uploaded image.
		$config['allowed_types'] = 'gif|jpg|jpeg|png'; // Define the allowed file types.

		$this->upload->initialize($config);

		if ($this->upload->do_upload('image')) {
			# code...
			// echo "<pre>";
			// print_r($this->upload->data());
			// exit();

			$old_image_path = './uploads/' . $data['image']->image;
			unlink($old_image_path);


			$img_data = $this->upload->data();
			$fileName = $img_data['file_name'];

			// echo $fileName;
			// print_r($data);
			// echo $id ; 
			// exit();

			$this->load->model('admin_panel/testimonials_model');
			$this->testimonials_model->edit_model($id, $all, $fileName);
			// exit();


		} else {
			# code...
			$this->load->model('admin_panel/testimonials_model');
			$this->testimonials_model->edit_model_without_image($id, $all);
		}



		// exit();

		redirect('admin_panel/Testimonials1/testimonials');
	}

	public function  delete_data($id)
	{
		// echo $id; exit();

		$this->load->model('admin_panel/testimonials_model');

		$data['image'] =	$this->testimonials_model->getbyid($id);

		$old_image_path = './uploads/' . $data['image']->image;
		unlink($old_image_path);


		if (!empty($id)) {
			# code...
			// echo "delete no : ".$id ;
			// exit();

			$this->load->model('admin_panel/testimonials_model');
			$this->testimonials_model->deletedata($id);
			redirect('admin_panel/Testimonials1/testimonials');
		}
	}
}
