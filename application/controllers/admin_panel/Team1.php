<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team1 extends CI_Controller
{

	public function team()
	{
		if (!$this->session->userdata('id')) {
			return redirect('admin_panel/Admin1/login');
		}
		$this->load->model('admin_panel/team_model');

		$user_data = $this->team_model->getall_data();

		// echo "<pre>";
		// var_dump(	$data = array( 'user_data' => $user_data ));

		$data = array('user_data' => $user_data);
		//  echo "<pre>";
		//   print_r($data);
		//  exit();

		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/team', $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function data_in()
	{
		$all = $this->input->post();
		$id['id'] = rand(111, 999999999);

		// print_r($all);
		// print_r($id);
		// exit();


		$config['upload_path'] = './uploads/'; // Specify the directory where you want to save the uploaded image.
		$config['allowed_types'] = 'gif|jpg|jpeg|png'; // Define the allowed file types.

		$this->upload->initialize($config);

		$this->upload->do_upload('image');

		// echo "<pre>";
		// print_r($this->upload->data());

		$img_data = $this->upload->data();
		$fileName = $img_data['file_name'];

		// echo $fileName;
		// print_r($all);
		// print_r($id);
		// exit();

		$this->load->model('admin_panel/team_model');

		$this->team_model->add_data($id, $all, $fileName);

		redirect('admin_panel/Team1/team');
	}

	public function data_edit($no)
	{
		// echo $no ;
		// exit();
		$this->load->model('admin_panel/team_model');
		// var_dump( $this->image_model->getbyid($no));
		// exit();
		$data['all'] = $this->team_model->getbyid($no);
		//  $this->load->view('image_pro/edit' , $data);

		// echo"<pre>";
		// print_r($data);
		// exit();


		$this->load->view('admin_panel/common/header');
		$this->load->view('admin_panel/common/sidebar');
		$this->load->view('admin_panel/edit_team', $data);
		$this->load->view('admin_panel/common/footer');
	}

	public function change_data($id)
	{
		$data = $this->input->post();

		// print_r($data);
		// echo $id ;
		// exit();

		$this->load->model('admin_panel/team_model');

		$data['image'] =	$this->team_model->getbyid($id);



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

			$this->load->model('admin_panel/team_model');
			$this->team_model->edit_model($id, $data, $fileName);
			// exit();


		} else {
			# code...
			$this->load->model('admin_panel/team_model');
			$this->team_model->edit_model_without_image($id, $data);
		}

		redirect('admin_panel/Team1/team');
	}

	public function  delete_data($id)
	{
		// echo $id; exit();
		$this->load->model('admin_panel/team_model');

		$data['image'] =	$this->team_model->getbyid($id);

		$old_image_path = './uploads/' . $data['image']->image;
		unlink($old_image_path);

		if (!empty($id)) {
			# code...
			// echo "delete no : ".$id ;

			$this->load->model('admin_panel/team_model');
			$this->team_model->deletedata($id);
			redirect('admin_panel/Team1/team');
		}
	}
}
