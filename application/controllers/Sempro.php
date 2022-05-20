<?php
class Sempro extends CI_Controller
{
	public function create()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('forms/sempro');
			$this->load->view('templates/footer');
		} else {

			$config['upload_path'] = './assets/uploads';
			$config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx';
			$config['max_size'] = '20000';

			$this->load->library('upload', $config);

			if (!empty($_FILES['upload_acc'])) {
				$this->upload->do_upload('upload_acc');
				$data1 = $this->upload->data();
				$upload_acc = $data1['file_name'];
			}

			if (!empty($_FILES['upload_proposal'])) {
				$this->upload->do_upload('upload_proposal');
				$data2 = $this->upload->data();
				$upload_proposal = $data2['file_name'];
			}

			$this->sempro_model->create_sempro($upload_acc, $upload_proposal);

			$this->sempro_model->notif_create();
			$this->session->set_flashdata(
				'sempro_added',
				'Pendaftar Seminar Proposal Kini Bertambah!'
			);

			redirect('sempro/lists');
		}
	}

	public function lists()
	{
		$data['sempros'] = $this->sempro_model->get_sempros();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('lists/sempro', $data);
		$this->load->view('templates/footer');
	}

	public function delete($id)
	{

		$this->sempro_model->notif_delete($id);
		$this->sempro_model->delete_sempro($id);
		$this->session->set_flashdata(
			'sempro_deleted',
			'Penghapusan Pendaftar Seminar Proposal Berhasil Dilakukan'
		);

		redirect('sempro/lists');
	}

	public function detail($id)
	{
		$data['sempro'] = $this->sempro_model->get_sempro($id);
		$sempro_id = $data['sempro']['id'];
		$data['comments'] = $this->sempro_model->get_comments($sempro_id);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('lists/sempro_detail', $data);
		$this->load->view('templates/footer');
	}

	public function isacc($id)
	{
		$data['sempros'] = $this->sempro_model->get_sempros();

		$data = array(
			'is_acc' => 1
		);

		$this->db->update('sempro', $data, ['id' => $id]);
		redirect('sempro/lists');
	}

	public function isrej($id)
	{
		$data['sempros'] = $this->sempro_model->get_sempros();

		$data = array(
			'is_acc' => 2
		);

		$this->db->update('sempro', $data, ['id' => $id]);
		redirect('sempro/lists');
	}

	public function comments($sempro_id)
	{

		$this->sempro_model->create_comment($sempro_id);
		redirect('sempro/detail/' . $sempro_id);
	}

	public function accview($id)
	{

		$data['sempro'] = $this->sempro_model->get_sempro($id);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('lists/semproview/acc', $data);
		$this->load->view('templates/footer');
	}

	public function proposalview($id)
	{

		$data['sempro'] = $this->sempro_model->get_sempro($id);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('lists/semproview/proposal', $data);
		$this->load->view('templates/footer');
	}
}
