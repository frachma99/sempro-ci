<?php
class Notif extends CI_Controller
{

	public function index()
	{
		$data['notifs'] = $this->db->get('notification')->result_array();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('notif', $data);
		$this->load->view('templates/footer');
	}

	public function isread($id)
	{
		$data = array(
			'is_read' => 1
		);

		$this->db->update('notification', $data, ['id' => $id]);
		$this->session->set_flashdata(
			'notif_added',
			'Notifikasi berhasil diperbarui'
		);

		redirect('notif');
	}

	// public function isreadall()
	// {
	// 	$notif = $this->db->get_where('notification', ['is_read' => 0])->result_array();

	// 	for ($i = 0; $i < count($notif); $i++) {
	// 		$data = array(
	// 			'is_read' => 1
	// 		);
	// 		$this->db->update('notification', $data, ['id' => $notif[$i]['id']]);
	// 	}
	// 	$this->session->set_flashdata(
	// 		'notif_added',
	// 		'Notifikasi berhasil diperbarui'
	// 	);

	// 	redirect('notif');
	// }

	public function isdeleteall()
	{
		$this->db->empty_table('notification');
		$this->session->set_flashdata(
			'notif_added',
			'Notifikasi berhasil diperbarui'
		);

		redirect('notif');
	}
}
